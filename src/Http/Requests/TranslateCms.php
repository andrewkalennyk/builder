<?php

namespace Admin\Builder\Http\Requests;

use Cartalyst\Sentinel\Laravel\Facades\Sentinel;
use Illuminate\Foundation\Http\FormRequest;

class TranslateCms extends FormRequest
{
    public function authorize(): bool
    {
        return Sentinel::getUser()->hasAccess(['admin.access']);
    }

    public function rules(): array
    {
        return [
            'phrase' => 'required|unique:translations_phrases_cms',
        ];
    }
}
