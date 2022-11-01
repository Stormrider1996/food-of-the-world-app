<?php

namespace App\Http\Resources;

use Illuminate\Support\Facades\App;
use Illuminate\Http\Resources\Json\JsonResource;

class TagResource extends JsonResource
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
            'slug' => $this->slug,
            'title' => $this->title,
        ];
    }
}
