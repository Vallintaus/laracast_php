<?php

namespace Core;

class Validator
{
    public function string($value, $min = 1, $max = INF)
    {
        $value = trim($value);

        return strlen($value) >= $min && strlen($value) <= $max;
    }

    public function email($value) 
    {
        // validator::email('email')
        return filter_var($value, FILTER_VALIDATE_EMAIL);
    }
}