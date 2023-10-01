<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Admin\Brand;
use App\Models\Admin\Category;
use App\Models\Admin\OtherImage;
use App\Models\Admin\Product;
use App\Models\Admin\SubCategory;
use App\Models\Admin\Unit;
use Illuminate\Http\Request;


class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */

    private $product;

    public function index()
    {
        $products = Product::all();
        return view('admin.product.index',compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $categories     = Category::where('status','1')->orderBy('id','desc')->get();
        $subCategories  = SubCategory::where('status','1')->orderBy('id','desc')->get();
        $brands         = Brand::where('status','1')->orderBy('id','desc')->get();
        $units          = Unit::where('status','1')->orderBy('id','desc')->get();
        return view('admin.product.create',compact(['categories','subCategories','brands','units']));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $this->product = Product::storeProduct($request);
        OtherImage::newOtherImage($request, $this->product->id);
        return redirect('/admin/product/')->with('store_message', 'A new products has been successfully created!!');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $product = Product::findOrfail($id);
        return view('admin.product.show',compact('product'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $product = Product::findOrfail($id);
        $categories = Category::where('status','1')->orderBy('id','desc')->get();
        $subCategories = SubCategory::where('status','1')->orderBy('id','desc')->get();
        $brands = Brand::where('status','1')->orderBy('id','desc')->get();
        $units = Unit::where('status','1')->orderBy('id','desc')->get();
        return view('admin.product.create',compact(['categories','subCategories','brands','units','product']));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        Product::updateProduct($request, $id);
        if ($request->file('other_image'))
        {
            OtherImage::updateOtherImage($request, $id);
        }
        return redirect('/admin/product/')->with('update_message','This product (uid='.$id.') has been updated!!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Product::destroyProduct($id);
        return redirect('/admin/product/')->with('destroy_message','This product (uid='.$id.') has been deleted!!');
    }

    public function getAllSubCategory()
    {
        return response()->json(SubCategory::where('category_id', $_GET['id'])->get());
    }
}
