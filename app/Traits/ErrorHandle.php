<?php

namespace App\Traits;

use App\Exceptions\FailedToValidateEntityException;

trait ErrorHandle {
    /**
     * @throws FailedToValidateEntityException
     */
    public static function throwFailedSaveEntityValidation() {
        throw new FailedToValidateEntityException();
    }
}
