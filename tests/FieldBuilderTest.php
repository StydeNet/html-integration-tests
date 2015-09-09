<?php

class FieldBuilderTest extends TestCase
{
    public function test_generates_a_text_field()
    {
        $this->assertTemplate(
            'fields/text',
            Field::text('name')
        );
    }

    public function test_generates_a_text_field_with_abbreviated_options()
    {
        // Having
        Field::setAbbreviations(['ph' => 'placeholder']);

        // Expect
        $this->assertTemplate(
            'fields/abbreviated_options',
            Field::text('name', 'value', ['ph' => 'Write your name'])
        );
    }

    public function test_generates_a_text_field_with_a_custom_label()
    {
        $this->assertTemplate(
            'fields/custom_label',
            Field::text('name', 'value', ['label' => "Full name"])
        );
    }

    public function test_generates_a_select_field()
    {
        $this->assertTemplate(
            'fields/select',
            Field::select('gender', ['m' => 'Male', 'f' => 'Female'])
        );
    }

    public function test_adds_an_empty_false_option_select_field()
    {
        $this->assertTemplate(
            'fields/select_false',
            Field::select('gender', ['m' => 'Male', 'f' => 'Female'], ['empty' => false])
        );
    }

    public function test_adds_an_empty_option_to_select_fields()
    {
        $this->assertTemplate(
            'fields/select_empty',
            Field::select('gender', ['m' => 'Male', 'f' => 'Female'], ['empty' => 'Select gender'])
        );
    }

    public function test_adds_a_multiple_option_to_select_field()
    {
        $this->assertTemplate(
            'fields/select_multiple',
            Field::select('fruits', ['1' => 'Apple', '2' => 'Banana', '3' => 'Watermelon'], null, ['multiple', 'empty' => false])
        );
    }
    
    public function test_adds_a_multiple_option_without_default_to_select_field()
    {
        $this->assertTemplate(
            'fields/select_multiple',
            Field::select('fruits', ['1' => 'Apple', '2' => 'Banana', '3' => 'Watermelon'], ['multiple', 'empty' => false])
        );
    }

    public function test_generates_a_text_field_with_errors()
    {
        // Having
        Field::setErrors([
            'name' => ['This is really wrong']
        ]);

        // Expect
        $this->assertTemplate(
            'fields/text_with_errors',
            Field::text('name')
        );
    }

    public function test_takes_select_options_from_the_model()
    {
        // Having
        Form::model(new \App\User());

        // Expect
        $this->assertTemplate(
            'fields/select_model',
            Field::select('gender')
        );
    }

    public function test_generates_checkboxes()
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
            'fields/checkboxes',
            Field::checkboxes('tags', $tags, $checked)
        );
    }

    function test_generate_radios()
    {
        $this->assertTemplate(
            'fields/radios',
            Field::radios('gender', ['m' => 'Male', 'f' => 'Female'], 'm')
        );
    }
}
