<?php

namespace App\Http\Controllers;

use App\Models\Book;
use App\Http\Requests\StoreBookRequest;
use App\Http\Requests\UpdateBookRequest;

class BookController extends Controller
{
    public function home()
    {
        return view('index', ['books' => Book::all()->take(35)]);
    }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('book.index', ['books' => Book::all()->take(35)]);
    }

    public function search()
    {
        return view('book.search', ['books' => Book::all()->take(35)]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreBookRequest $request)
    {
        $validated = $request->validated();
        Book::create($validated);
        return redirect()->route('dashboard');
    }

    /**
     * Display the specified resource.
     */
    public function show(Book $book)
    {
        return view('book.detail', ['book' => $book]);
    }


    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Book $book)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateBookRequest $request, Book $book)
    {
        $validated = $request->validate();
        $book->update($validated);
        return view('dashboard', ['book' => $book]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Book $book)
    {
        Book::destroy($book);
        return redirect()->route('dashboard');
    }
}
