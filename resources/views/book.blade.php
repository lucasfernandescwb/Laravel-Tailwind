@extends("layouts.app")

@section("title", $book->title)

@section("content")

<div>

    <div class="flex flex-col sm:flex-row gap-4 max-w-[968px] mx-auto">
        <aside class="flex flex-col gap-4">
            <div class="w-full sm:w-[190px] h-[294px] flex justify-center overflow-hidden rounded">
                <img src="{{ $book->coverImg }}" alt="Cover">
            </div>

            <div class="hidden p-4 bg-gray-200 rounded shadow-sm sm:flex flex-col gap-4 sticky top-0">
                <div>
                    <label for="author" class="block mb-2 text-indigo-400 font-medium">Author:</label>
                    <span class="block" id="title">{{ $book->author }}</span>
                </div>

                <div>
                    <label for="date" class="block mb-2 text-indigo-400 font-medium">Released At:</label>
                    <span class="block" id="date">{{ $book->released_at }}</span>
                </div>

                <div>
                    <label for="pages" class="block mb-2 text-indigo-400 font-medium">Pages:</label>
                    <span class="block" id="pages">{{ $book->pages }}</span>
                </div>
            </div>
        </aside>
    
        <div class="w-full sm:w-[calc(100%_-_240px)]">
            <header class="flex flex-col gap-2 mb-4 bg-gray-200 p-4 rounded shadow-sm">
                <h2 class="text-2xl text-indigo-400 font-bold">{{ $book->title }}</h2>
                <i class="text-gray-400"><span class="font-bold">{{ $book->author }}</span> - {{ $book->released_at }} - {{ $book->pages }} pages</i>
            </header>
    
            <x-markdown class="article">{{ $book->description }}</x-markdown>
        </div>
    </div>

    <hr class="my-6" />

    <section class="flex flex-col items-center sm:items-start gap-4">
        <h3 class="text-xl font-bold">Recommendations:</h3>

        <div class="flex flex-col sm:flex-row sm:items-center gap-6">
            @foreach ($filteredBooks as $rBook)
                <x-card :book="$rBook" />
            @endforeach
        </div>
    </section>
</div>

@endsection