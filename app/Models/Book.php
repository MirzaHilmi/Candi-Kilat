<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    use HasFactory;

    protected $with = [
        'author',
        'categories'
    ];

    protected $fillable = [
        'author_id',
        'title',
        'cover_url',
        'release_year',
        'edition',
        'publisher',
        'published_from',
        'language',
        'total_page',
        'synopsis',
        'rating',
        'hard_copy_available',
        'ebook_available',
        'audio_book_available',
        'status',
        'bookshelf'
    ];

    public function borrowedBooks(): \Illuminate\Database\Eloquent\Relations\HasMany
    {
        return $this->hasMany(BorrowedBook::class);
    }

    public function categories()
    {
        return $this->belongsToMany(Category::class);
    }

    public function author()
    {
        return $this->belongsTo(Author::class);
    }
}
