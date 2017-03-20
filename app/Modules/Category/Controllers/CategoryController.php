<?php

namespace App\Modules\Category\Controllers;

use App\Category;
use App\CategoryProperty;
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

    // Store new category item. Type is type of category. E.G group or event.
    // Types must be specified in plural
    public function store($type, Request $request)
    {

        $category = Category::firstOrCreate([
            'type' => $type,
            'title' => $request->input('group_name')
        ]);

        // This should only be called when we create a group.
        if ($type === 'groups' ) {
            $this->createGroupUsers($request, $category);

            return \Redirect::back();
        }
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

    /* Maybe you should place this functionalty in a group class or group service. */
    public function createGroupUsers(Request $request, $category)
    {
        $props = [];
        /* TODO: pass event id when creating a group */
        /* TODO: pass user array to the new group */
        // $request->input('event')

        $newGroup = CategoryProperty::firstOrCreate([
            'category_id' => $category->id,
            'tag' => 'event',
            'value' => 'event'
        ]);

        \Session::flash('message', "Group created!");

        /*
        foreach ($request->input('users') as $key => $user) {
            $props[] = CategoryProperty::firstOrCreate([
                'category_id' => $category->id,
                'tag' => 'user',
                'value' => $user
            ]);
        }
        */
    }
}
