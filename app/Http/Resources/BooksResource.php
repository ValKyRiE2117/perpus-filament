<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class BooksResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'id' => $this->id,
            'isbn' => $this->isbn,
            'title' => $this->title,
            'author_id' => $this->author_id,
            'author_name' => $this->author->name,
            'categories_id' => $this->categories_id,
            'category_name' => $this->category->name,
            'publisher' => $this->publisher,
            'published_year' => $this->published_year,
            'stock' => $this->stock,
            'pages' => $this->pages,
            'description' => $this->description,
            'cover_image' => $this->cover_image,
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at,
        ];
    }
}
