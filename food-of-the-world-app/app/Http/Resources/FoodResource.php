<?php

namespace App\Http\Resources;

use App\Models\Tag;
use App\Models\Food;
use App\Models\Category;
use App\Models\Ingredient;
use App\Models\TagTranslation;
use Illuminate\Support\Facades\App;
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
        $request->query('lang');
        App::setLocale($request->query('lang'));
        return [
            'id' => $this->id,
            'status' => $this->status,
            'title' => $this->title,
            'description' => $this->description,
            'category' => new CategoryResource($this->whenLoaded('category')),
            'ingredients' => IngredientResource::collection($this->whenLoaded('ingredients')),
            'tags' => TagResource::collection($this->whenLoaded('tags')),
        ];
    }
}
