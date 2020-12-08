<?php

namespace App\Http\Resources\Review;

use Illuminate\Http\Resources\Json\JsonResource;

class ReviewResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return [
            "customer" => $this->user->name,
            "review"   => $this->review,
            "star"     => $this->star > 0 ? $this->star : 'No rating yet',
        ];
    }
}
