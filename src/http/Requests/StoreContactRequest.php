<?php

namespace Http\Requests;

use Http\Requests\Request;

class StoreContactRequest extends Request
{
    protected $fillable = [
        'email', 'name', 'purpose', 'message'
    ];

    public function __construct()
    {
        $this->fill_post($this->fillable);
    }

    public function to_array()
    {
        $assoc = [];

        foreach($this->fillable as $field) {
            $assoc[$field] = $this->$field;
        }

        return $assoc;
    }
}