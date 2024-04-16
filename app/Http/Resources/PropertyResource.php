<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class PropertyResource extends JsonResource
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
            'id' => $this->id,
            'name' => $this->name,
            'bedrooms' => $this->bedrooms,
            'bathrooms' => $this->bathrooms,
            'cleanrooms' => $this->cleanrooms,
            'parkings' => $this->parkings,
            'address' => $this->address,
            'moodsBuy' => $this->moodsBuy,
            'price' => $this->price,
            'discount' => $this->discount,
            'sizeLength' => $this->sizeLength,
            'sizeWidth' => $this->sizeWidth,
            'level' => $this->level,
            'floors' => $this->floors,
            'type' => $this->type,
            'appliances' => $this->appliances,
            'status' => $this->status,
            'created_at' => $this->created_at->format('Y-m-d H:i:s'),
            'updated_at' => $this->updated_at->format('Y-m-d H:i:s'),
        ];
    }
}