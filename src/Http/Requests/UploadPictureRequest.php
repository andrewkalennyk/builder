<?php

namespace Admin\Builder\Http\Requests;

use Cartalyst\Sentinel\Laravel\Facades\Sentinel;
use Illuminate\Foundation\Http\FormRequest;

class UploadPictureRequest extends FormRequest
{
    public function authorize(): bool
    {
        return Sentinel::getUser()->hasAccess(['admin.access']);
    }

    public function rules(): array
    {
        return [
            'image'  => ['required', 'mimes:jpg,jpeg,png,gif,webp,svg,avif,bmp'],
            'type' => ['nullable', 'string']
        ];
    }
}
