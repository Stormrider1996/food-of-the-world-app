<?php

namespace App\Models;

use Astrotomic\Translatable\Contracts\Translatable as TranslatableContract;
use Astrotomic\Translatable\Translatable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Food extends Model implements TranslatableContract
{
    use HasFactory, SoftDeletes, Translatable;

    protected $fillable = ['status'];
    public $translatedAttributes = ['title', 'description'];
    
    
    public function category(){
        return $this->hasOne(Category::class, 'food_id', 'id' );
    }
    
    public function ingredients(){
        return $this->hasMany(Ingredient::class, 'food_id', 'id');
    }
    
    public function tags(){
        return $this->hasMany(Tag::class, 'food_id', 'id');
    }

}
