<?php

namespace App\Constraint;

class Constraint
{
    public function notBlank($name, $value): ?string
    {
        if(empty($value)) {
            return '<p>Le champ '.$name.' saisi est vide</p>';
        }
    }
    public function minLength($name, $value, $minSize)
    {
        if(strlen($value) < $minSize) {
            return '<p>Le champ '.$name.' doit contenir au moins '.$minSize.' caractères</p>';
        }
    }
    public function maxLength($name, $value, $maxSize)
    {
        if(strlen($value) > $maxSize) {
            return '<p>Le champ '.$name.' doit contenir au maximum '.$maxSize.' caractères</p>';
        }
    }
    public function emailFormat($name, $value)
    {
        if (!filter_var($value, FILTER_VALIDATE_EMAIL)) {
            return '<p>Le champ '.$name.' doit être une adresse e-mail valide</p>';
        }
    }
}
