<?php

namespace App\Http\Controllers;

use App\Models\Admin\Category;
use App\Models\Admin\EcommerceCarousel;
use App\Models\Admin\Product;
use App\Models\Admin\products;
use App\Models\Admin\SubCategory;
use App\Models\Admin\WebsiteBlog;
use App\Models\Admin\WebsiteCarousel;
use Illuminate\Http\Request;

class APIController extends Controller
{
    private $categories,$subCategories, $blogs, $index, $products;

    public function getAllCategory()
    {
        $this->categories = Category::where('status','1')->orderBy('id','asc')->get(['id','name','image']);
        foreach ($this->categories as $category)
        {
            $category->sub_category = SubCategory::where('status','1')->where('category_id',$category->id)->orderBy('id','asc')->get();
            $category->image = asset($category->image);

        }
        return response()->json($this->categories);
    }

    public function getAllProducts()
    {
        $this->products = Product::where('status',1)->get();
        foreach ($this->products as $product)
        {
            $product->category  = $product->category;
            $product->image     = asset($product->image);
        }
        return response()->json($this->products);
    }

    public function getTrendingProducts()
    {
        $this->products = Product::where('status',1)->where('show_in_trending',1)->get();
        foreach ($this->products as $product)
        {
            $product->category  = $product->category;
            $product->image     = asset($product->image);
        }
        return response()->json($this->products);
    }

    public function getCarouselActive()
    {
        return response()->json(WebsiteCarousel::where('status',1)->where('position','active')->orderBy('serial','asc')->get());
    }
    public function getCarousel()
    {
        return response()->json(WebsiteCarousel::where('status',1)->where('position','inactive')->orderBy('serial','asc')->get());
    }

    public function getCarouselEcommerce()
    {
        return response()->json(EcommerceCarousel::where('status',1)->orderBy('serial','asc')->get());
    }

    public function getCategoryProduct($id)
    {
        $this->products = Product::where('category_id',$id)->get();
        foreach ($this->products as $product)
        {
            $product->image     = asset($product->image);
        }
        return response()->json($this->products);
    }

    public function getBlogs()
    {
        $this->blogs = WebsiteBlog::where('status',1)->limit(3)->get();
        foreach ($this->blogs as $blog)
        {
            $blog->image = asset($blog->image);
        }
        return response()->json($this->blogs);
    }

}
