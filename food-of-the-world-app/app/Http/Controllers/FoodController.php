<?php

namespace App\Http\Controllers;

use App\Models\Food;
use Illuminate\Routing\Controller;
use App\Http\Resources\TagResource;
use App\Http\Resources\FoodResource;
use App\Http\Resources\CategoryResource;
use App\Http\Resources\IngredientResource;

use function GuzzleHttp\Promise\all;

class FoodController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $withParms = array_filter(explode(",", request('with')));
        return FoodResource::collection(Food::with($withParms)
        -> paginate(request('per_page'), ['*'], 'page', request('page')));
        
    }

}
