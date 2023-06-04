<?php

namespace App\Http\Controllers;

use App\Models\Book;
use App\Http\Requests\StoreBookRequest;
use App\Http\Requests\UpdateBookRequest;
use App\Http\Resources\BookResource;

class BookController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $books = Book::query()->orderBy('id', 'desc')->paginate(10);
        return view('home', ['books' => BookResource::collection($books)]);
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
        $credentials = $request->validated();

        $book = Book::create($credentials);

        return response(new BookResource($book));
    }

    /**
     * Display the specified resource.
     */
    public function show(Book $book)
    {
        $book = Book::find($book->id);
        $filteredBooks = Book::query()->where("id", "!=", $book->id)->paginate(10);

        if (!$book) {
            return response()->json([
                'message' => 'Book not found.'
            ], 404);
        }

        return view('book', ['book' => $book, 'filteredBooks' => $filteredBooks]);
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
        $book = Book::find($book->id);

        if (!$book) {
            return response()->json([
                'message' => 'Book not found.'
            ], 404);
        }

        $book->update($request->validated());

        return response(new BookResource($book));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Book $book)
    {
        $book = Book::find($book->id);

        if (!$book) {
            return response()->json([
                'message' => 'Book not found.'
            ], 404);
        }

        $book->delete();

        return response()->json([
            'message' => 'Book successfully deleted!'
        ], 200);
    }
}
