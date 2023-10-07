<?php

namespace App\Http\Controllers\Admin\Website;

use App\Http\Controllers\Controller;
use App\Models\Admin\WebsiteBusinessPartner;
use Illuminate\Http\Request;
use function Psy\bin;

class BusinessPartner extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $bps = WebsiteBusinessPartner::all();
        return view('admin.website.business-partner.index',compact('bps'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.website.business-partner.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        WebsiteBusinessPartner::storeBP($request);
        return redirect('admin/website/business-partner/')->with('store_message','A new business partner has been successfully created!!');
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
        $bp = WebsiteBusinessPartner::findOrfail($id);
        return view('admin.website.business-partner.create',compact('bp'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        WebsiteBusinessPartner::updateBP($request, $id);
        return redirect('admin/website/business-partner/')->with('update_message','This business partner (uid='.$id.') has been updated!!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        WebsiteBusinessPartner::destroyBP($id);
        return redirect('admin/website/business-partner/')->with('destroy_message','This business partner (uid='.$id.') has been deleted!!');
    }
}
