<?php

namespace App\Http\Controllers;

use App\Models\Part;
use Illuminate\Http\Request;

    class PartController extends Controller
{
    public function index(){
        $parts = response()->json(Part::all());
        return $parts;
    }

    public function show($id){
        $item = response()->json(Part::find($id));
        return $item;
    }

    public function store(Request $request){
        $item = new Part();
        $item->part_id = $request->part_id;
        $item->name = $request->name;

        $item->save();
    }

    public function update(Request $request, $id){
        $item = Part::find($id);
        $item->part_id = $request->part_id;
        $item->name = $request->name;
   
        $item->save();
    }

    public function destroy($id){
        Part::find($id)->delete();
    }
}
