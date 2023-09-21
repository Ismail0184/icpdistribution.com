<?php

namespace App\Http\Controllers;

use App\Models\Admin\Category;
use App\Models\Admin\products;
use App\Models\Admin\SubCategory;
use Illuminate\Http\Request;

class APIController extends Controller
{

    public function getAllCategory()
    {
        $categories = Category::where('status','1')->orderBy('id','desc')->get(['id','name']);
        return response()->json(compact('categories'));
    }

    public function getAllSubCategory()
    {
        $subCategory = SubCategory::where('status',1)->orderBy('id','desc')->get(['id','name']);
        return response()->json(compact('subCategory'));
    }

}
