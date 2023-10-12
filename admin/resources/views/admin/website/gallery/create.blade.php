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
                                <form action="@if(request('id')>0) {{route('admin.web.gallery.update', ['id'=>$gallery->id])}} @else {{route('admin.web.gallery.store')}} @endif" method="post" enctype="multipart/form-data">
                                    @csrf
                                    <div class="form-group">
                                        <label for="exampleInputPassword1">Images</label>
                                        @if(request('id')>0)
                                            <input type="file" name="image" class="form-control">
                                            <img src="{{asset($gallery->image)}}" height="100" width="100">
                                        @else
                                        <input type="file" name="images[]" multiple class="form-control">
                                        @endif
                                    </div>
                                    @if(request('id')>0)
                                        <div class="form-group">
                                            <label class="col-form-label">Status <span class="required text-danger">*</span></label>
                                            <select class="form-control" name="status">
                                                <option value="1" @if($gallery->status=='1') selected @endif>Active</option>
                                                <option value="0" @if($gallery->status=='0') selected @endif>Inactive</option>
                                            </select>
                                        </div>
                                    @endif

                                    <a href="{{route('admin.web.gallery.view')}}" type="submit" class="btn btn-danger mt-4 pr-4 pl-4 text-white">Cancel</a>
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
