<?php

namespace App\Traits;

use App\Models\Book;
use Illuminate\Database\Eloquent\Builder;

trait SearchBookTrait
{
    private function sanitize(string $str)
    {
        return htmlspecialchars(strip_tags(trim($str)));
    }

    public function searchBook(string $searchQuery): \Illuminate\Database\Eloquent\Collection
    {
        if (empty($searchQuery)) return Book::all()->take(35);

        $books = Book::search($this->sanitize($searchQuery))->query(
            function (Builder $builder) {
                $builder->join('authors', 'books.author_id', 'authors.id')
                    ->join('book_category', 'book_category.book_id', 'books.id')
                    ->join('categories', 'categories.id', 'book_category.category_id')
                    ->select(['books.*', 'authors.id as author_id', 'categories.id as categories_id'])
                    ->orderBy('books.id', 'DESC');
            }
        )->get()->load('author', 'categories');

        return $books ?? (new Book())->newCollection();
    }
}
