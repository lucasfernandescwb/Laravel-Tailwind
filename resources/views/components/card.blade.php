<a class="w-[190px] group" href="/books/{{ $book->id }}">
    <div class="w-full h-[294px] flex overflow-hidden rounded mr-4 shadow-sm">
        <img src="{{ $book->coverImg }}" alt="Cover">
    </div>
    <p class="font-medium text-ellipsis line-clamp-1 transition-colors group-hover:text-indigo-400">{{ $book->title }}</p>
</a>