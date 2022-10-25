<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class IngredientTranslationResource extends JsonResource
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
            'ingredientId' => $this->ingredient_id,
            'title' => $this->title,
        ];
    }
}
