<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Auth;

class UpdateBookRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return Auth::check();
    }

    /**
     * Indicates if the validator should stop on the first rule failure.
     *
     * @var bool
     */
    protected $stopOnFirstFailure = true;

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array|string>
     */
    public function rules(): array
    {
        return [
            'author_id' => 'integer',
            'name' => 'string',
            'cover_url' => 'string',
            'release_year' => 'integer',
            'publisher' => 'string',
            'published_from' => 'string',
            'language' => 'string',
            'total_page' => 'integer',
            'synopsis' => 'string',
            'rating' => 'numeric',
            'hard_copy_available' => 'boolean',
            'ebook_available' => 'boolean',
            'audio_book_available' => 'boolean',
            'status' => 'boolean',
            'bookshelf' => 'string',
        ];
    }
}
