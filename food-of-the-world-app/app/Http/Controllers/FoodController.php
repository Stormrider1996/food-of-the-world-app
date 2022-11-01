<?php

namespace App\Http\Controllers;

use App\Models\Food;
use App\Filters\FoodFilter;
use Illuminate\Http\Request;
use App\Models\FoodTranslation;
use Illuminate\Routing\Controller;
use App\Http\Resources\FoodResource;
use App\Http\Resources\FoodTranslationResource;

class FoodController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $include = $request->query('with');;

        if ($include) {
            $withParms = explode("," , $request->query('with'));
            $food = Food::with($withParms);
        }
        
        return FoodResource::collection($food->paginate($request->query('per_page'), ['*'], 'page', $request->query('page'))->appends($request->query()));
       
    }

        
}

