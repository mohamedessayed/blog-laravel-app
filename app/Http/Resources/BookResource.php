<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class BookResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        // return parent::toArray($request);

        return [
            'id'=>$this->id,
            'book_name'=>$this->book_name,
            'auther'=>$this->auther?->auther_name,
            'image'=>$this->image ? asset("storage/".$this->image?->url) : null,
            'price'=>"$$this->book_price",
        ];
    }
}
