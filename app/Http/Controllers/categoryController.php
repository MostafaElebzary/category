<?php

namespace App\Http\Controllers;

use App\Category;
use Illuminate\Http\Request;

class categoryController extends Controller
{
    public function index(Request $request)
    {

        $categories = Category::with('childrenCategories')->root()->get();
        return response()->json(['status' => 200, 'msg' => 'success', 'data' => $categories]);


    }
}
