<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class BookResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
       return [
            'code' => $this->id,
            'title' => $this->title,
            'content' => $this->content,
            'author' => $this->author,
            'image' => $this->path,
            'id_user' => $this->user_id,
            'category' => [
                'code' => $this->category_id,
                'type' => $this->category->type
            ],
            'date_modification' => $this->updated_at
        ];
    }
}
