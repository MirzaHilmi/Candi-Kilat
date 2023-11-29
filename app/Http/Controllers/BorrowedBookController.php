<?php

namespace App\Http\Controllers;

use App\Models\BorrowedBook;
use App\Http\Requests\StoreBorrowedBookRequest;
use App\Http\Requests\UpdateBorrowedBookRequest;
use App\Models\Book;
use App\Traits\SearchBookTrait;
use Illuminate\Database\Eloquent\Builder;

class BorrowedBookController extends Controller
{
    use SearchBookTrait;
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $searchQuery = request('search_query');
        if (!isset($searchQuery) || empty($searchQuery)) {
            return view('book.borrowing', [
                'books' => Book::inRandomOrder()->where('status', true)->take(50)->get()
            ]);
        }

        return view('book.borrowing', ['books' => $this->searchBook($searchQuery, true)]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreBorrowedBookRequest $request)
    {
        $book = Book::find($request->book_id);

        if (empty($book) || $book->status === false) {
            return redirect()->route('book.borrowing');
        }

        BorrowedBook::create([
            'book_id' => $request->book_id,
            'name' => $request->name,
            'email' => $request->email,
            'borrowed_date' => $request->borrowed_date,
            'until_date' => $request->until_date
        ]);

        $book->status = false;
        $book->save();

        $request->session()->flash('book_borrowed', 'Peminjaman Berhasil!');

        return redirect()->back();
    }

    public function history()
    {
        $searchQuery = request('search_query');
        if (!isset($searchQuery) || empty($searchQuery))
            return view('book.history', [
                'books' => Book::has('borrowedBooks')->take(35)->get()
            ]);

        return view('book.history', ['books' => $this->searchBorrowedBook($searchQuery)]);
    }

    public function returning()
    {
        return view('book.returning');
    }

    /**
     * Update the specified resource in storage.
     */
    public function updateToReturn(UpdateBorrowedBookRequest $request)
    {
        $book = Book::where('isbn', $request->isbn)->first();

        if ($book === null) {
            return redirect()->route('book.returning')->withErrors(['errors' => 'Invalid isbn code']);
        }

        $borrowedBook = BorrowedBook::whereHas('book', function (Builder $query) use ($request) {
            $query->where('isbn', $request->isbn);
        })->where('name', $request->name)->where('return_date', null)->first();

        if ($borrowedBook === null) {
            return redirect()->route('book.returning')->withErrors(['errors' => 'No matching borrowed book found in database']);
        }

        $borrowedBook->return_date = date('Y-m-d');
        $book->status = true;

        $borrowedBook->save();
        $book->save();


        $request->session()->flash('book_returned', 'Pengembalian Berhasil!');

        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(BorrowedBook $borrowedBook)
    {
        //
    }
}
