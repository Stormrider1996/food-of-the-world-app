<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TagTranslation extends Model
{
    use HasFactory;

    protected $connection = 'mysql4';
    public $timestamps = false;
    protected $fillable = ['title'];
}
