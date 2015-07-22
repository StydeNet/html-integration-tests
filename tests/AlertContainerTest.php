<?php

class AlertContainerTest extends TestCase
{

    function test_render_new_messages()
    {
        // Having
        Alert::message('This is a message', 'info');

        // Expect
        $this->assertTemplate('alerts/alert', Alert::render());
    }

    function test_uses_magic_methods()
    {
        // Having
        Alert::success('Success!');
        Alert::info('Some information');

        // Expect
        $this->assertTemplate('alerts/magic', Alert::render());
    }

    function test_chains_methods_to_build_complex_alert_messages()
    {
        // Having
        $items = [
            'Laravel courses',
            'OOP classes',
            'Access to real projects',
            'Support',
            'And more'
        ];

        Alert::info('Your account is about to expire')
            ->details('A lot of knowledge still waits for you:')
            ->items($items)
            ->button('Renew now!', '#', 'primary')
            ->button('Take me to your leader', 'http://google.com', 'info');

        // Expect
        $this->assertTemplate('alerts/complex', Alert::render());
    }

}