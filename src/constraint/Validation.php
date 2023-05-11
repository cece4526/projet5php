<?php

namespace App\Constraint;

use Config\Parameter;
use App\Constraint\UserValidation;
class Validation
{
    public function validate(Parameter $data, string $name)
    {
        $classValidationName = ucfirst($name).'Validation';
        $this->createValidateClass($classValidationName, $data);
    }
    public function createValidateClass($classValidationName, $data)
    {
        $class = 'App\Constraint\\'.$classValidationName;
        $classValidtion = new $class;
        $errors = $classValidtion->check($data);
        return $errors;
    }
}
