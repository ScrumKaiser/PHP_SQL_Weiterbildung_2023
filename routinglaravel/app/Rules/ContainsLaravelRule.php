<?php

namespace App\Rules;

use Closure;
use Illuminate\Contracts\Validation\ValidationRule;

class ContainsLaravelRule implements ValidationRule
{
    /**
     * Run the validation rule.
     *
     * @param  \Closure(string): \Illuminate\Translation\PotentiallyTranslatedString  $fail
     */
    public function validate(string $attribute, mixed $value, Closure $fail): void
    {
        if (!str_contains($value, 'Laravel'))
            $fail('Does not contain the word "Laravel".');
    }

    /* public function passes(string $attribute, mixed $value)
    {
        return str_contains($value, 'Laravel');
    }

    public function message()
    {
        return 'Does not contain the word "Laravel".';
    } */
}
