<?php

namespace App\Http\Forms;

class LoginForm extends Form
{

    /**
     * Use this method to add fields and buttons to your form model
     *
     * @param  \Styde\Html\FieldCollection  $fields
     * @param  \Styde\Html\ButtonCollection $buttons
     */
    protected function setup($fields, $buttons)
    {
        $this->route('login')
            ->method('POST')
            ->attr('role', 'form');

        $fields->email('email');
        $fields->password('password');
        $fields->checkbox('remember_me');

        $buttons->submit(trans('auth.login_action'))->classes('btn btn-primary');
        $buttons->link(url('password/email'), trans('auth.forgot_link'));
    }

}
