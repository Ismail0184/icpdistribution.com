@extends('layouts.app')

@section('title')
    @if(request('id')>0) Update @else Create @endif Product
@endsection

@section('body')

    <script src="//js.nicedit.com/nicEdit-latest.js" type="text/javascript"></script>
    <script type="text/javascript">bkLib.onDomLoaded(nicEditors.allTextAreas);</script>

    <div class="main-content-inner">
        <div class="row">
            <div class="col-lg-6 col-ml-12">
                <div class="row">
                    <!-- basic form start -->
                    <div class="col-12 mt-5">
                        <div class="card">
                            <div class="card-body">
                                <form action="@if(request('id')>0) {{route('product.update', ['id'=>$product->id])}} @else {{route('product.store')}} @endif" method="post" enctype="multipart/form-data">
                                    @csrf
                                    <div class="form-group">
                                        <label class="col-form-label">Category <span class="required text-danger">*</span></label>
                                        <select class="form-control" name="category_id" required onchange="getproduct(this.value)">
                                            <option value="">-- select a category --</option>
                                            @foreach($categories as $category)
                                                <option value="{{$category->id}}" @if(request('id')>0) @if($product->category_id==$category->id) selected @endif @endif>{{$category->name}}</option>
                                            @endforeach
                                        </select>
                                    </div>

                                    <div class="form-group">
                                        <label class="col-form-label">Sub-Category <span class="required text-danger">*</span></label>
                                        <select class="form-control" name="sub_category_id" required id="productId">
                                            <option value="">-- select a sub-category --</option>
                                            @foreach($subCategories as $subCategory)
                                                <option value="{{$subCategory->id}}" @if(request('id')>0) @if($product->sub_category_id==$subCategory->id) selected @endif @endif>{{$subCategory->name}}</option>
                                            @endforeach
                                        </select>
                                    </div>

                                    <div class="form-group">
                                        <label class="col-form-label">Brand <span class="required text-danger">*</span></label>
                                        <select class="form-control" name="brand_id" required>
                                            <option value="">-- select a brand --</option>
                                            @foreach($brands as $brand)
                                                <option value="{{$brand->id}}" @if(request('id')>0) @if($product->brand_id==$brand->id) selected @endif @endif>{{$brand->name}}</option>
                                            @endforeach
                                        </select>
                                    </div>

                                    <div class="form-group">
                                        <label class="col-form-label">Unit <span class="required text-danger">*</span></label>
                                        <select class="form-control" name="unit_id" required>
                                            <option value="">-- select a unit --</option>
                                            @foreach($units as $unit)
                                                <option value="{{$unit->id}}" @if(request('id')>0) @if($product->unit_id==$unit->id) selected @endif @endif>{{$unit->name}}</option>
                                            @endforeach
                                        </select>
                                    </div>

                                    <div class="form-group">
                                        <label for="productCode">Product Code <span class="required text-danger">*</span></label>
                                        <input type="text" class="form-control" required @if(request('id')>0) value="{{$product->code}}" @endif name="code" />
                                    </div>

                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Product Name <span class="required text-danger">*</span></label>
                                        <input type="text" class="form-control" required @if(request('id')>0) value="{{$product->name}}" @endif name="name">
                                    </div>

                                    <div class="form-group">
                                        <label for="description">Short Description</label>
                                        <input type="text" name="short_description" class="form-control" @if(request('id')>0) value="{{$product->short_description}}" @endif />
                                    </div>

                                    <div class="form-group">
                                        <label for="description">Long Description</label>
                                        <textarea name="long_description" cols="30" rows="10" class="form-control">@if(request('id')>0) {!! $product->long_description !!} @endif</textarea>
                                    </div>

                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Stock Amount <span class="required text-danger">*</span></label>
                                        <input type="text" class="form-control" required @if(request('id')>0) value="{{$product->stock_amount}}" @endif name="stock_amount">
                                    </div>

                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Regular Price <span class="required text-danger">*</span></label>
                                        <input type="text" class="form-control" required @if(request('id')>0) value="{{$product->regular_price}}" @endif name="regular_price">
                                    </div>

                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Selling Price <span class="required text-danger">*</span></label>
                                        <input type="text" class="form-control" required @if(request('id')>0) value="{{$product->selling_price}}" @endif name="selling_price">
                                    </div>

                                    <div class="form-group">
                                        <label for="exampleInputPassword1">Product Feature Image</label>
                                        <input type="file" name="image" class="form-control">
                                    </div>

                                    <div class="form-group">
                                        <label for="exampleInputPassword1">Product Other Image</label>
                                        <input type="file" name="other_image[]" multiple class="form-control">
                                    </div>

                                    <div class="form-group">
                                        <label class="col-form-label">Show in Trending</label>
                                        <select class="form-control" name="show_in_trending">
                                            <option value="1" @if($product->show_in_trending=='1') selected @endif>On</option>
                                            <option value="0" @if($product->show_in_trending=='0') selected @endif>Off</option>
                                        </select>
                                    </div>

                                    @if(request('id')>0)
                                        <div class="form-group">
                                            <label class="col-form-label">Status <span class="required text-danger">*</span></label>
                                            <select class="form-control" name="status">
                                                <option value="1" @if($product->status=='1') selected @endif>Active</option>
                                                <option value="0" @if($product->status=='0') selected @endif>Inactive</option>
                                            </select>
                                        </div>
                                    @endif

                                    <a href="{{route('product')}}" type="submit" class="btn btn-danger mt-4 pr-4 pl-4 text-white">Cancel</a>
                                    <button type="submit" class="btn btn-primary mt-4 pr-4 pl-4">@if(request('id')>0) Update @else Submit @endif</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
        function getproduct(categoryId)
        {
            $.ajax({
                type: "GET",
                url: "{{route('get-all-sub-category')}}",
                data: {id: categoryId},
                dataType: "JSON",
                success: function (response) {
                    var option = '';
                    option += '<option> -- Select Sub Category -- </option>';
                    $.each(response,  function (key, value)
                    {
                        option += '<option value="'+value.id+'"> '+ value.name +' </optoin>';
                    })
                    var productId = $('#productId');
                    productId.empty();
                    productId.append(option);
                }
            });
        }
    </script>
@endsection
