<?php

namespace App\Constraint;

use Config\Parameter;

class Validation
{
    public function validate(Parameter $data, string $name)
    {
        $classValidationName = ucfirst($name).'Validation';
        return $this->createValidateClass($classValidationName, $data);
    }
    public function createValidateClass($classValidationName, $data)
    {
        $class = 'App\Constraint\\'.$classValidationName;
        $classValidation = new $class;
        $errors = $classValidation->check($data);
        return $errors;
    }
}
