<?php

namespace App\Http\Controllers;

use App\Models\Admin\Category;
use App\Models\Admin\Product;
use App\Models\Admin\products;
use App\Models\Admin\SubCategory;
use Illuminate\Http\Request;

class APIController extends Controller
{
    private $categories,$subCategories, $data = [], $index, $products;

    public function getAllCategory()
    {
        $this->categories = Category::where('status','1')->orderBy('id','desc')->get(['id','name']);
        foreach ($this->categories as $category)
        {
            $category->sub_category = SubCategory::where('status','1')->where('category_id',$category->id)->orderBy('id','desc')->get();

            /*$this->data[$key]['id'] = $category->id;
            $this->data[$key]['name'] = $category->name;
            $this->data[$key]['sub_category'] = $this->subCategories;*/
        }
        return response()->json($this->categories);
    }

    public function getAllProducts()
    {
        $this->products = Product::where('status',1)->get();
        return response()->json($this->products);
    }

}
