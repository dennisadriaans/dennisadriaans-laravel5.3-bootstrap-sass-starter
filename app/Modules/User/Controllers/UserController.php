<?php

namespace App\Modules\User\Controllers;

use App\category;
use App\CategoryProperty;
use App\Http\Controllers\Controller;
use App\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        return User::all();
    }

    public function show($id)
    {
        $user = User::find($id);
        return CategoryProperty::where('value', '=', $user->email)
            ->with('category.properties')->first();
    }
}
