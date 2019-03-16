<?php

namespace Http\Requests;

class Request
{
    public function fill_post($fields = [])
    {
        foreach($fields as $field) {
            $this->$field = $this->post_input($field);
        }
    }

    public function post_input($name) 
    {
        return filter_input(INPUT_POST, $name, FILTER_SANITIZE_SPECIAL_CHARS);
    }
}