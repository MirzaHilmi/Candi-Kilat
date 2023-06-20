<?php

namespace App\Traits;

use App\Models\Book;
use Illuminate\Database\Query\Builder;

trait SearchBookTrait
{
    public function searchBook(string $keyword): \Illuminate\Database\Eloquent\Collection
    {
        $books = Book::search(trim(empty($keyword) ?? ''))
            ->query(function (Builder $query) {
                $query->join('authors', 'books.author_id', 'authors.id')
                    ->join('book_category', 'books.id', 'book_category.book_id')
                    ->join('categories', 'book_category.category_id', 'categories.id')
                    ->orderBy('books.id', 'DESC');
            })
            ->get();

        return $books ?? (new Book())->newCollection();
    }
}
