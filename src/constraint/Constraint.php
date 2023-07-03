<?php

namespace App\Constraint;

class Constraint
{
    public function notBlank($name, $value)
    {
        if (empty($value)) {
            return 'Le champ '.$name.' saisi est vide';
        }
    }
    
    public function minLength($name, $value, $minSize)
    {
        if (strlen($value) < $minSize) {
            return 'Le champ '.$name.' doit contenir au moins '.$minSize.' caractères';
        }
        
        return null;
    }
    
    public function maxLength($name, $value, $maxSize)
    {
        if (strlen($value) > $maxSize) {
            return 'Le champ '.$name.' doit contenir au maximum '.$maxSize.' caractères';
        }

        return null;
    }
    
    public function emailFormat($name, $value)
    {
        if (!filter_var($value, FILTER_VALIDATE_EMAIL)) {
            return 'Le champ '.$name.' doit être une adresse e-mail valide';
        }
        
        return null;
    }
}
