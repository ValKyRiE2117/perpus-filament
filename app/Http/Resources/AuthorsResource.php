<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class AuthorsResource extends JsonResource
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
            'name' => $this->name,
            'biography' => $this->biography,
            'nationality' => $this->nationality,
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at,
            'books_count' => $this->books_count,
        ];
    }
}
