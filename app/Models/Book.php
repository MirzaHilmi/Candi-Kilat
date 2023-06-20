<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Laravel\Scout\Searchable;

class Book extends Model
{
    use HasFactory, Searchable;

    protected $fillable = [
        'author_id',
        'title',
        'cover_url',
        'release_year',
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

    public function borrowed_book(): \Illuminate\Database\Eloquent\Relations\HasOne
    {
        return $this->hasOne(BorrowedBook::class);
    }

    public function categories()
    {
        return $this->belongsToMany(Category::class);
    }

    public function author()
    {
        return $this->belongsTo(Author::class);
    }

    public function toSearchableArray()
    {
        return [
            'title' => '',
            'body' => '',
            'author.name' => '',
            'categories.name' => '',
        ];
    }
}
