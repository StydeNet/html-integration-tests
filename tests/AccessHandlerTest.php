<?php

use Styde\Html\Access\AccessHandler;
use Styde\Html\Access\BasicAccessHandler;

class AccessHandlerTest extends TestCase
{

    public function test_acccess_handler()
    {
        $access = $this->app->make(AccessHandler::class);

        $this->assertInstanceOf(
            BasicAccessHandler::class,
            $access
        );
    }

}