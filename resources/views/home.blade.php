@extends('layouts.app')

@section("title", "Home")

@section("content")

<h2 class="text-2xl border-b-2 border-b-indigo-300 mb-4 w-fit">Recent books:</h2>

<div class="flex flex-col gap-4">
    @foreach ($books as $book)
        <div class="bg-gray-200 rounded shadow-sm p-4 transition-shadow hover:shadow-md mb-2 flex flex-col gap-2">
            <a href="books/{{ $book->id }}" class="text-xl border-b-2 font-bold text-indigo-400 w-fit transition-colors hover:text-indigo-200">
                {{ $book->title }}
            </a>

            <div class="flex items-center gap-2">
                @foreach ($book->genres as $genre)
                    <x-tag :tagTitle="$genre" />
                @endforeach
            </div>

            <p>Wrote by: {{ $book->author }} - {{ $book->released_at }}</p>
        </div>
    @endforeach
</div>

@endsection
