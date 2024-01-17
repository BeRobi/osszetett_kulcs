<?php

namespace App\Http\Controllers;

use App\Models\Basket;
use Illuminate\Http\Request;

class BasketController extends Controller
{
    public function index()
    {
        return response()->json(Basket::all());
    }

    public function show($user_id, $item_id)
    {   // ezt át kell írni
        $basket = Basket::where('user_id', $user_id)
            ->where('item_id', "=", $item_id)
            ->get();
        return $basket[0];
    }

    public function store(Request $request)
    {
        $basket = new Basket();
        $basket->user_id = $request->user_id;
        $basket->item_id = $request->item_id;

        $basket->save();
    }

    public function update(Request $request, $user_id, $item_id)
    {   //ez át kell írni
        $basket = $this->show($user_id, $item_id);
        $basket->user_id = $request->user_id;
        $basket->item_id = $request->item_id;

        $basket->save();
    }

    public function destroy($user_id, $item_id)
    {   //ezt is át kell írni
        $this->show($user_id, $item_id)->delete();
    }
}
