<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use App\Http\Resources\LoansResource;
use Illuminate\Http\Resources\Json\JsonResource;

class MemberWithLoansResource extends JsonResource
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
            'email' => $this->email,
            'phone' => $this->phone,
            'address' => $this->address,
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at,
            'loans' => LoansResource::collection($this->whenLoaded('loans')),
            'loans_count' => $this->loans_count,
        ];
    }
}
