<?php

namespace App\Http\Controllers;

use App\Models\Food;
use App\Models\FoodTranslation;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\App;
use App\Http\Resources\FoodResource;
use App\Http\Requests\StoreFoodRequest;
use App\Http\Requests\UpdateFoodRequest;
use GuzzleHttp\Psr7\Request;

class FoodController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return FoodResource::collection(Food::paginate());
        // return FoodResource::collection(Food::paginate(request('per_page')));
    }


    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Food  $food
     * @return \Illuminate\Http\Response
     */
    public function show(Food $food)
    {
        return FoodResource::collection(Food::paginate($food));
    }

}
