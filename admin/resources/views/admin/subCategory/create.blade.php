@extends('layouts.app')

@section('title')
    @if(request('id')>0) Update @else Create @endif Sub-Category
@endsection

@section('body')
    <div class="main-content-inner">
        <div class="row">
            <div class="col-lg-6 col-ml-12">
                <div class="row">
                    <!-- basic form start -->
                    <div class="col-12 mt-5">
                        <div class="card">
                            <div class="card-body">
                                <form action="@if(request('id')>0) {{route('subCategory.update', ['id'=>$subCategory->id])}} @else {{route('subCategory.store')}} @endif" method="post" enctype="multipart/form-data">
                                    @csrf
                                    <div class="form-group">
                                        <label class="col-form-label">Category <span class="required text-danger">*</span></label>
                                        <select class="form-control" name="category_id" required>
                                            <option value="">-- select a category --</option>
                                            @foreach($categories as $category)
                                            <option value="{{$category->id}}" @if(request('id')>0) @if($subCategory->category_id==$category->id) selected @endif @endif>{{$category->name}}</option>
                                            @endforeach
                                        </select>
                                    </div>

                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Sub-Category Name <span class="required text-danger">*</span></label>
                                        <input type="text" class="form-control" required @if(request('id')>0) value="{{$subCategory->name}}" @endif name="name">
                                    </div>

                                    <div class="form-group">
                                        <label for="description">Description</label>
                                        <textarea name="description" class="form-control">@if(request('id')>0){{$subCategory->description}} @endif</textarea>
                                    </div>

                                    <div class="form-group">
                                        <label for="exampleInputPassword1">Image</label>
                                        <input type="file" name="image" class="form-control">
                                    </div>

                                    @if(request('id')>0)
                                        <div class="form-group">
                                            <label class="col-form-label">Status <span class="required text-danger">*</span></label>
                                            <select class="form-control" name="status">
                                                <option value="1" @if($subCategory->status=='1') selected @endif>Active</option>
                                                <option value="0" @if($subCategory->status=='0') selected @endif>Inactive</option>
                                            </select>
                                        </div>
                                    @endif

                                    <a href="{{route('subCategory')}}" type="submit" class="btn btn-danger mt-4 pr-4 pl-4 text-white">Cancel</a>
                                    <button type="submit" class="btn btn-primary mt-4 pr-4 pl-4">@if(request('id')>0) Update @else Submit @endif</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
