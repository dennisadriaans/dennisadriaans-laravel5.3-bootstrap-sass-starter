<?php

namespace App\Modules\Category\Controllers;

use App\category;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index($type)
    {
        $values = Category::where('type', '=', $type)->get();
        return view('Category::' . $type)->with($type, $values);
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        //
    }

    public function show($type, $id)
    {
        $item = Category::where('id', '=', $id)->with('properties')->first();
        return view('Category::' . $type . '-detail')->With('item', $item);
    }

    public function edit($id)
    {
        //
    }

    public function update(Request $request, $id)
    {
        //
    }

    public function destroy($id)
    {
        //
    }
}
