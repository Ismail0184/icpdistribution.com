<?php

namespace App\Http\Controllers\Admin\Website;

use App\Http\Controllers\Controller;
use App\Models\Admin\WebsiteBlog;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $blogs = WebsiteBlog::all();
        return view('admin.website.blog.index',compact('blogs'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.website.blog.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        WebsiteBlog::storeBlog($request);
        return redirect('admin/website/blog/')->with('store_message','A new blog has been successfully created!!');
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
        $blog = WebsiteBlog::findOrfail($id);
        return view('admin.website.blog.create',compact('blog'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        WebsiteBlog::updateBlog($request, $id);
        return redirect('admin/website/blog/')->with('update_message','This Blog (uid='.$id.') has been updated!!');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        WebsiteBlog::destroyBlog($id);
        return redirect('admin/website/blog/')->with('destroy_message','This blog (uid='.$id.') has been deleted!!');
    }
}
