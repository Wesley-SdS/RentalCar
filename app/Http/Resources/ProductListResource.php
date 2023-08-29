<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\URL;

class ProductListResource extends JsonResource
{
    /**
     * Transform the resource collection into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        return [
            'id' => $this->id,
            'models' => $this->models,
            'brand' => $this->brand,
            'plate' => $this->plate,
            'category' => $this->category,
            'description' => $this->description,
            'rent' => $this->rent,
            'slug' => $this->slug,
            'image_mini' => $this->image_mini,
            'image' => $this->image ?: null,
            'image_size' => $this->image_size,
            'updated_at' => (new \DateTime($this->updated_at))->format('Y-m-d H:i:s'),
        ];
    }
}
