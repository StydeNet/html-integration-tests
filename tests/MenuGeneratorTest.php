<?php

use Mockery as m;
use Styde\Html\Facades\Menu;

class MenuGeneratorTest extends TestCase
{

    public function test_render_menus()
    {
        // Having
        $items = array(
            'home' => ['url' => '/'],
            'about' => [],
            'projects' => ['title' => 'Our projects', 'url' => 'projects'],
            'contact' => ['url' => 'contact-us']
        );

        // Expect
        $this->assertTemplate(
            'menus/menu',
            Menu::make($items)->render()
        );
    }

    function test_generates_routes()
    {
        Route::get('dashboard', ['as' => 'dashboard']);
        Route::get('edit_home', ['as' => 'pages.edit']);

        // Having
        $items = [
            'dashboard' => ['route' => 'dashboard'],
            'edit_home' => ['route' => ['pages.edit', 'home']]
        ];

        // Expect
        $this->assertTemplate(
            'menus/routes',
            Menu::make($items)->render()
        );

    }

    function test_implements_routes_with_dynamic_parameters()
    {
        Route::get('account', ['as' => 'account']);
        Route::get('calendar', ['as' => 'calendar']);

        // Having
        $user_id = 20;
        $year = 2015;
        $month = 07;
        $day = 11;

        $items = [
            'account' => [
                'route' => ['account', ':user_id']
            ],
            'calendar' => [
                'route' => ['calendar', ':year', ':month', ':day']
            ]
        ];

        $menu = Menu::make($items)
            ->setParams(compact('year', 'month', 'day'))
            ->setParam('user_id', $user_id);

        // Expect
        $this->assertTemplate(
            'menus/parameters',
            $menu->render()
        );
    }

    function test_generates_submenus()
    {
        // Having
        $items = [
            'home' => ['url' => '/'],
            'about' => [
                'submenu' => [
                    'team' => [],
                    'careers' => ['title' => 'Work with us']
                ]
            ],
            'projects' => ['title' => 'Our projects', 'url' => 'projects'],
            'contact' => ['url' => 'contact-us']
        ];

        // Expect
        $this->assertTemplate(
            'menus/submenu',
            Menu::make($items)->render()
        );
    }

}