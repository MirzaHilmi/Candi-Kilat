<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Auth;

class StoreBookRequest extends FormRequest
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
            'author_id' => 'required|integer',
            'title' => 'required|string',
            'cover_url' => 'required|string',
            'release_year' => 'required|integer',
            'edition' => 'required|integer',
            'publisher' => 'required|string',
            'published_from' => 'required|string',
            'language' => 'required|string',
            'total_page' => 'required|integer',
            'synopsis' => 'required|string',
            'rating' => 'required|numeric',
            'hard_copy_available' => 'required|boolean',
            'ebook_available' => 'required|boolean',
            'audio_book_available' => 'required|boolean',
            'status' => 'boolean',
            'bookshelf' => 'required|string',
        ];
    }
}
