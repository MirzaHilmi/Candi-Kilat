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

    public function searchBook(string $searchQuery, bool $checkStatus = false): \Illuminate\Database\Eloquent\Collection
    {
        if (empty($searchQuery)) return Book::inRandomOrder()->take(35)->get();

        $needle = $this->sanitize($searchQuery);

        if ($checkStatus) {
            $books = Book::where('status', true)->where('title', 'LIKE', "%$needle%")
                ->orWhereHas('author', function (Builder $query) use ($needle) {
                    $query->where('name', 'LIKE', "%$needle%");
                })->where('status', true)
                ->orWhereHas('categories', function (Builder $query) use ($needle) {
                    $query->where('name', 'LIKE', "%$needle%");
                })->where('status', true)->get();

            return $books;
        }

        $books = Book::where('title', 'LIKE', "%$needle%")
            ->orWhereHas('author', function (Builder $query) use ($needle) {
                $query->where('name', 'LIKE', "%$needle%");
            })
            ->orWhereHas('categories', function (Builder $query) use ($needle) {
                $query->where('name', 'LIKE', "%$needle%");
            })->get();

        return $books;
    }

    public function searchBorrowedBook(string $searchQuery): \Illuminate\Database\Eloquent\Collection
    {
        if (empty($searchQuery)) return Book::inRandomOrder()->take(35)->get();

        $needle = $this->sanitize($searchQuery);

        $books = Book::where('status', false)->where('title', 'LIKE', "%$needle%")
            ->orWhereHas('author', function (Builder $query) use ($needle) {
                $query->where('name', 'LIKE', "%$needle%");
            })->where('status', false)
            ->orWhereHas('categories', function (Builder $query) use ($needle) {
                $query->where('name', 'LIKE', "%$needle%");
            })->where('status', false)->get();

        return $books;

        return $books;
    }
}
