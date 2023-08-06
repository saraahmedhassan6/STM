<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class PostResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'post_id'=>$this->id,
            'post_title'=>$this->title,
            'post_descr'=>$this->descr,
            'user'=>new UserResource($this->user)

        ];
    }
}
