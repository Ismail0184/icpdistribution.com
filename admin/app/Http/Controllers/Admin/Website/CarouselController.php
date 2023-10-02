<?php

namespace App\Http\Controllers\Admin\Website;

use App\Http\Controllers\Controller;
use App\Models\Admin\WebsiteCarousel;
use Illuminate\Http\Request;

class CarouselController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $carousels = WebsiteCarousel::all();
        return view('admin.website.carousel.index',compact('carousels'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.website.carousel.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        WebsiteCarousel::storeCarousel($request);
        return redirect('admin/website/carousel/')->with('store_message','A new carousel has been created!!');
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
        $carousel = WebsiteCarousel::findOrfail($id);
        return view('admin.website.carousel.create',compact('carousel'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        WebsiteCarousel::updateCarousel($request, $id);
        return redirect('admin/website/carousel/')->with('update_message','This carousel (uid='.$id.') has been updated!!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        WebsiteCarousel::destroyCarousel($id);
        return redirect('admin/website/carousel/')->with('destroy_message','This carousel (uid='.$id.') has been deleted!!');
    }
}
