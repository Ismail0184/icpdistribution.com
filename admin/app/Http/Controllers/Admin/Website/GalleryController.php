<?php

namespace App\Http\Controllers\Admin\website;

use App\Http\Controllers\Controller;
use App\Models\Admin\WebsiteGallery;
use Illuminate\Http\Request;

class GalleryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $galleries = WebsiteGallery::all();
        return view('admin.website.gallery.index',compact('galleries'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.website.gallery.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        WebsiteGallery::storeGallery($request);
        return redirect('admin/website/gallery/');
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
        $gallery = WebsiteGallery::findOrfail($id);
        return view('admin.website.gallery.create',compact('gallery'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        WebsiteGallery::updateGallery($request, $id);
        return redirect('admin/website/gallery/')->with('update_message','This image has been updated!!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        WebsiteGallery::destroyGallery($id);
        return redirect('admin/website/gallery/')->with('destroy_message','This image has been deleted!!');
    }
}
