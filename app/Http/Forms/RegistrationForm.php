<?php

namespace App\Http\Forms;

class RegistrationForm extends Form
{

    /**
     * Use this method to add fields and buttons to your form model
     *
     * @param  \Styde\Html\FieldCollection  $fields
     * @param  \Styde\Html\ButtonCollection $buttons
     */
    protected function setup($fields, $buttons)
    {
        $this->method('POST')
            ->url('auth/register')
            ->attr('role', 'form');

        $fields->text('name');
        $fields->email('email');
        $fields->password('password');
        $fields->password('password_confirm')->label('Confirm your password');
        $fields->radios('gender')->attr('inline');
        $fields->selectMonth('month');
        $fields->select('profession_id');
        $fields->checkboxes('interests')->attr('inline');

        $buttons->submit(trans('auth.register_action'))->classes('btn btn-primary');

        /**
         *
         * {!! Field::text('name') !!}
         * {!! Field::email('email') !!}
         * {!! Field::password('password') !!}
         * {!! Field::password('password_confirm', ['label' => 'Confirm your password']) !!}
         * {!! Field::radios('gender', null, 'm', ['inline' => true]) !!}
         * {!! Field::select('profession_id') !!}
         * {!! Field::checkboxes('interests', null, null, ['inline' => true]) !!}
         *
         * <button type="submit" class="btn btn-primary">
         *     @lang('auth.register_action')
         * </button>
         *
         */
    }

}