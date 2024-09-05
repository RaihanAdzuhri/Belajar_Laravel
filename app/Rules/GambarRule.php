<?php

namespace App\Rules;

use Illuminate\Contracts\Validation\Rule;

class GambarRule implements Rule
{
    public function passes($attribute, $value)
    {
        // Custom logic to validate the image (e.g., checking size or dimensions)
        return is_file($value) && in_array($value->getMimeType(), ['image/jpeg', 'image/png', 'image/gif']);
    }

    public function message()
    {
        return 'The :attribute is not a valid image.';
    }
}

