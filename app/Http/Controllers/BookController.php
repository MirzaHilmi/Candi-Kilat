<?php

namespace App\Http\Controllers;

use App\Models\Book;
use App\Http\Requests\StoreBookRequest;
use App\Http\Requests\UpdateBookRequest;
use Illuminate\Database\Query\Builder;

class BookController extends Controller
{
    public function home(string $keyword)
    {
        if (!isset($keyword)) return view('index', ['books' => Book::all()->take(35)]);

        return redirect()->route('home.index', ['books' => $this->find($keyword)]);
    }

    /**
     * Display a listing of the resource.
     */
    public function index(string $keyword)
    {
        if (!isset($keyword)) return view('book.index', ['books' => Book::all()->take(35)]);

        return redirect()->route('book.index', ['books' => $this->find($keyword)]);
    }

    public function search(string $keyword)
    {
        if (!isset($keyword)) return view('book.search', ['books' => Book::all()->take(35)]);

        return view('book.search', ['books' => $this->find($keyword)]);
    }

    private function find(string $keyword)
    {
        $searchKeyword = htmlspecialchars(strip_tags($keyword));

        $result = Book::where('title', 'like', "%$searchKeyword%")->take(15)->get()
            ?? Book::where('author_id', function (Builder $query) use ($searchKeyword) {
                $query->select('id')
                    ->from('author')
                    ->where('name', 'like', "%$searchKeyword%");
            })->take(15)->get();

        return $result;
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
