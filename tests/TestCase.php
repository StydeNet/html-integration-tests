<?php

use Mockery as m;

class TestCase extends Illuminate\Foundation\Testing\TestCase
{
    /**
     * The base URL to use while testing the application.
     *
     * @var string
     */
    protected $baseUrl = 'http://forms.laravel';

    protected $createTemplates = true;

    public function tearnDown()
    {
        m::close();
    }

    /**
     * Creates the application.
     *
     * @return \Illuminate\Foundation\Application
     */
    public function createApplication()
    {
        $app = require __DIR__."/../bootstrap/app.php";

        $app->make(Illuminate\Contracts\Console\Kernel::class)->bootstrap();

        return $app;
    }

    protected function assertTemplate($template, $actual)
    {
        $theme = Config::get('html.theme', 'bootstrap');
        $template = __DIR__ . "/expectations/$theme/$template.html";

        if ( ! file_exists($template)) {

            if ($this->createTemplates) {
                file_put_contents($template, $actual);
            } else {
                $this->fail("Template: $template does not exist");
            }

            return;

        }

        $expected = file_get_contents($template);

        if (is_object($actual)) {
            $actual = (string) $actual;
        }

        $this->assertTrue(
            $this->removeWhitespaces($expected) === $this->removeWhitespaces($actual),
            "The templates don't match, expected: \n\n{$expected}\nActual: \n\n{$actual}"
        );
    }

    protected function removeWhitespaces($string)
    {
        return trim(str_replace('> <', '><', preg_replace('/\s+/', ' ', $string)));
    }
}
