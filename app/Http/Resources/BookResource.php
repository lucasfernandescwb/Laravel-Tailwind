<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class BookResource extends JsonResource
{
    public static $wrap = false;

    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'id' => $this->id,
            'author' => $this->author,
            'coverImg' => $this->coverImg,
            'description' => $this->description,
            'genres' => $this->genres,
            'pages' => $this->pages,
            'releasedAt' => $this->released_at,
            'title' => $this->title,
        ];
    }
}
