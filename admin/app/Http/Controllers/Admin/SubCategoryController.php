<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Admin\Category;
use App\Models\Admin\SubCategory;
use Illuminate\Http\Request;

class SubCategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $subCategories = SubCategory::all();
        return view('admin.subCategory.index',compact('subCategories'));

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $categories = Category::where('status','1')->get();
        return view('admin.subCategory.create',compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        SubCategory::storeSubCategory($request);
        return redirect('/admin/sub-category/')->with('store_message','A new sub category has been created!!');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $categories = Category::where('status','1')->get();
        $subCategory = SubCategory::findOrfail($id);
        return view('admin.subCategory.create',compact(['subCategory','categories']));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        SubCategory::updateSubCategory($request, $id);
        return redirect('/admin/sub-category/')->with('update_message','This sub category (uid='.$id.') has been created!!');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        SubCategory::destroySubCategory($id);
        return redirect('/admin/sub-category/')->with('update_message','This sub category (uid='.$id.') has been deleted!!');

    }
}
