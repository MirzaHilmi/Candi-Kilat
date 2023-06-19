<?php

namespace App\Http\Controllers;

use App\Models\BorrowedBook;
use App\Http\Requests\StoreBorrowedBookRequest;
use App\Http\Requests\UpdateBorrowedBookRequest;
use App\Models\Book;

class BorrowedBookController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('book.borrowing', ['book' => Book::all()->take(35)]);
    }

    public function returning()
    {
        return view('book.returning');
    }

    public function history()
    {
        $userID = auth()->id();
        return view('book.history');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreBorrowedBookRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(BorrowedBook $borrowedBook)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(BorrowedBook $borrowedBook)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateBorrowedBookRequest $request, BorrowedBook $borrowedBook)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(BorrowedBook $borrowedBook)
    {
        //
    }
}
