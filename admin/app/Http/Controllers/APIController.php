<?php

namespace App\Http\Controllers;

use App\Models\Admin\Category;
use App\Models\Admin\products;
use Illuminate\Http\Request;

class APIController extends Controller
{

    public function getAllCategory()
    {
        return Category::where('status','1')->orderBy('id','desc')->get();
    }

    public function getAllProduct()
    {
        return products::where('status','1')->orderBy('id','desc')->get();
    }
}
