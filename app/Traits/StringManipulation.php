<?php

namespace App\Traits;

trait StringManipulation {
    /**
     * trim the word if is a string
     *
     * @param  $value
     * @return mixed
     */
    public static function trimIfString($value): mixed
    {
        return is_string($value) ? trim($value) : $value;
    }
}
