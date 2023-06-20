<?php

namespace App\Http\Controllers;

use App\Models\Book;
use App\Http\Requests\StoreBookRequest;
use App\Http\Requests\UpdateBookRequest;
use App\Traits\SearchBookTrait;

class BookController extends Controller
{
    use SearchBookTrait;

    public function home()
    {
        $searchQuery = request('search_query');
        if (!isset($searchQuery) || empty($searchQuery))
            return view('index', ['books' => Book::query()->take(35)->get()]);

        return view('index', ['books' => $this->searchBook($searchQuery)]);
    }

    public function search()
    {
        $searchQuery = request('search_query');
        if (!isset($searchQuery) || empty($searchQuery))
            return view('book.search', ['books' => Book::query()->take(35)->get()]);

        return view('book.search', ['books' => $this->searchBook($searchQuery)]);
    }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $searchQuery = request('search_query');
        if (!isset($searchQuery) || empty($searchQuery))
            return view('book.index', ['books' => Book::query()->take(35)->get()]);

        return view('book.index', ['books' => $this->searchBook($searchQuery)]);
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

    public function test()
    {
        $searchQuery = request('search_query');
        if (!isset($searchQuery) || empty($searchQuery))
            return view('book.test', ['books' => Book::query()->take(35)->get()]);

        return view('book.test', ['books' => $this->searchBook($searchQuery)]);
    }
}
