<?php

namespace App\Models;

use Astrotomic\Translatable\Contracts\Translatable as TranslatableContract;
use Astrotomic\Translatable\Translatable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ingredient extends Model implements TranslatableContract
{
    use HasFactory, Translatable;

    protected $connection = 'mysql3';
    public $translatedAttributes = ['title'];
    protected $fillable = ['slug'];
}
