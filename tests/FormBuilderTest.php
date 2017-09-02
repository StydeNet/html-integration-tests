<?php

class FormBuilderTest extends TestCase
{

    function test_adds_a_novalidate_option()
    {
        // Having
        Form::novalidate(true);

        // Expect
        $this->assertTemplate(
            'forms/novalidate',
            Form::open(['method' => 'GET'])
        );
    }

    function test_generates_time_inputs()
    {
        $this->assertTemplate('forms/time', Form::time('clocks'));
    }

    function test_generate_radios()
    {
        $this->assertTemplate(
            'forms/radios',
            Form::radios('gender', ['m' => 'Male', 'f' => 'Female'], 'm')
        );
    }

    function test_generate_radios_with_numeric_values()
    {
        $this->assertTemplate(
            'forms/radios-numeric',
            Form::radios('visible', [1 => 'Yes', 0 => 'No'], 1)
        );
    }

    function test_generate_checkboxes()
    {
        // Having
        $tags = [
            'php' => 'PHP',
            'python' => 'Python',
            'js' => 'JS',
            'ruby' => 'Ruby on Rails'
        ];
        $checked = ['php', 'js'];

        // Expect
        $this->assertTemplate(
            'forms/checkboxes',
            Form::checkboxes('tags', $tags, $checked)
        );
    }

}