<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Admin\EcommerceCarousel;
use Illuminate\Http\Request;

class EcommerceCarouselController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $carousels = EcommerceCarousel::all();
        return view('admin.carousel.index',compact('carousels'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.carousel.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        EcommerceCarousel::storeCarousel($request);
        return redirect('/admin/carousel/')->with('store_message','A new carousel has been created!!');
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
        $carousel = EcommerceCarousel::findOrfail($id);
        return view('admin.carousel.create',compact('carousel'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        EcommerceCarousel::updateCarousel($request, $id);
        return redirect('/admin/carousel/')->with('update_message','This carousel (uid='.$id.') has been updated!!');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        EcommerceCarousel::destroyCarousel($id);
        return redirect('/admin/carousel/')->with('update_message','This carousel (uid='.$id.') has been deleted!!');
    }
}
