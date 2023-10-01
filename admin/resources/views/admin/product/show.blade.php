@extends('layouts.app')

@section('title')
    Product View
@endsection

@section('body')
    <div class="main-content-inner">
        <div class="row">
            <div class="col-lg-6 col-ml-12">
                <div class="row">
                    <div class="col-12 mt-5">
                        <div class="card">
                            <div class="card-body">
                                <table class="table">
                                    <tr>
                                        <th style="width: 20%">Code</th>
                                        <th style="width: 1%">:</th>
                                        <td>{{$product->code}}</td>
                                    </tr>
                                    <tr>
                                        <th>Product Name</th>
                                        <th>:</th>
                                        <td>{{$product->name}}</td>
                                    </tr>
                                    <tr>
                                        <th>Category</th>
                                        <th>:</th>
                                        <td>{{$product->category->name}}</td>
                                    </tr>
                                    <tr>
                                        <th>Sub-Category</th>
                                        <th>:</th>
                                        <td>{{$product->subCategory->name}}</td>
                                    </tr>
                                    <tr>
                                        <th>Brand</th>
                                        <th>:</th>
                                        <td>{{$product->brand->name}}</td>
                                    </tr>
                                    <tr>
                                        <th>Unit</th>
                                        <th>:</th>
                                        <td>{{$product->unit->name}}</td>
                                    </tr>
                                    <tr>
                                        <th>Short Description</th>
                                        <th>:</th>
                                        <td>{{$product->short_description}}</td>
                                    </tr>
                                    <tr>
                                        <th>Long Description</th>
                                        <th>:</th>
                                        <td>{{$product->long_description}}</td>
                                    </tr>
                                    <tr>
                                        <th>Stock Amount</th>
                                        <th>:</th>
                                        <td>{{$product->stock_amount}}</td>
                                    </tr>
                                    <tr>
                                        <th>Regular Price</th>
                                        <th>:</th>
                                        <td>{{$product->regular_price}}</td>
                                    </tr>
                                    <tr>
                                        <th>Selling Price</th>
                                        <th>:</th>
                                        <td>{{$product->selling_price}}</td>
                                    </tr>
                                    <tr>
                                        <th>Selling Price</th>
                                        <th>:</th>
                                        <td>{{$product->selling_price}}</td>
                                    </tr>
                                    <tr>
                                        <th>Image</th>
                                        <th>:</th>
                                        <td><img src="{{asset($product->image)}}" alt="" height="100" width="130"/></td>
                                    </tr>
                                    <tr>
                                        <th>Product Other Image</th>
                                        <th>:</th>
                                        <td>
                                            @foreach($product->otherImages as $otherImage)
                                                <img src="{{asset($otherImage->image)}}" alt="" height="100" width="130"/>
                                            @endforeach
                                        </td>
                                    </tr>
                                </table>
                                <a href="{{route('product')}}" type="submit" class="btn btn-danger mt-4 pr-4 pl-4 text-white">Back</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
