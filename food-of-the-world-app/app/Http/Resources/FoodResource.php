<?php

namespace App\Http\Resources;

use App\Models\Category;
use App\Models\Food;
use App\Models\Tag;
use App\Models\Ingredient;
use App\Models\TagTranslation;
use Illuminate\Http\Resources\Json\JsonResource;

class FoodResource extends JsonResource
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
            'status' => $this->status,
            'translations' => FoodTranslationResource::collection($this->translations),
            'category' => new CategoryResource($this->category),
            'ingredients' => IngredientResource::collection($this->ingredients),
            'tags' => TagResource::collection($this->tags),
        ];
    }
}
