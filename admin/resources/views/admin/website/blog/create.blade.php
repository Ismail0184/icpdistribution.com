@extends('layouts.app')

@section('title')
    @if(request('id')>0) Update @else Create @endif Blog
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
                                <form action="@if(request('id')>0) {{route('admin.web.blog.update', ['id'=>$blog->id])}} @else {{route('admin.web.blog.store')}} @endif" method="post" enctype="multipart/form-data">
                                    @csrf
                                    <input type="hidden" name="entry_by" value="{{ Auth::user()->id }}">
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Serial <span class="required text-danger">*</span></label>
                                        <input type="text" class="form-control" required @if(request('id')>0) value="{{$blog->serial}}" @endif name="serial">
                                    </div>

                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Heading <span class="required text-danger">*</span></label>
                                        <input type="text" class="form-control" required @if(request('id')>0) value="{{$blog->headline}}" @endif name="headline">
                                    </div>

                                    <div class="form-group">
                                        <label for="description">Description <span class="required text-danger">*</span></label>
                                        <textarea name="description" required class="form-control">@if(request('id')>0){{$blog->description}} @endif</textarea>
                                    </div>

                                    <div class="form-group">
                                        <label for="exampleInputPassword1">Image <span class="required text-danger">*</span></label>
                                        <input type="file" name="image" @if(request('id')>0) @else required @endif class="form-control">
                                        @if(request('id')>0) <img src="{{asset($blog->image)}}" alt="" height="100" width="130"/> @endif
                                    </div>

                                    @if(request('id')>0)
                                        <div class="form-group">
                                            <label class="col-form-label">Status <span class="required text-danger">*</span></label>
                                            <select class="form-control" name="status">
                                                <option value="1" @if($blog->status=='1') selected @endif>Active</option>
                                                <option value="0" @if($blog->status=='0') selected @endif>Inactive</option>
                                            </select>
                                        </div>
                                    @endif

                                    <a href="{{route('admin.web.blog.view')}}" type="submit" class="btn btn-danger mt-4 pr-4 pl-4 text-white">Cancel</a>
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
