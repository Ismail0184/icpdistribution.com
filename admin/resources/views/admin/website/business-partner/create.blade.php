@extends('layouts.app')

@section('title')
    @if(request('id')>0) Update @else Create @endif Business Partner
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
                                <form action="@if(request('id')>0) {{route('admin.web.bp.update', ['id'=>$bp->id])}} @else {{route('admin.web.bp.store')}} @endif" method="post" enctype="multipart/form-data">
                                    @csrf
                                    <input type="hidden" name="entry_by" value="{{ Auth::user()->id }}">
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Serial <span class="required text-danger">*</span></label>
                                        <input type="text" class="form-control" required @if(request('id')>0) value="{{$bp->serial}}" @endif name="serial">
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Partner Name <span class="required text-danger">*</span></label>
                                        <input type="text" class="form-control" required @if(request('id')>0) value="{{$bp->partner_name}}" @endif name="partner_name">
                                    </div>

                                    <div class="form-group">
                                        <label for="description">Description</label>
                                        <textarea name="details"  class="form-control">@if(request('id')>0){{$bp->details}} @endif</textarea>
                                    </div>

                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Website</label>
                                        <input type="text" class="form-control" @if(request('id')>0) value="{{$bp->website}}" @endif name="website">
                                    </div>

                                    <div class="form-group">
                                        <label for="exampleInputPassword1">Logo</label>
                                        <input type="file" name="logo" class="form-control">
                                        @if(request('id')>0) <img src="{{asset($bp->logo)}}" alt="" height="100" width="130"/> @endif
                                    </div>


                                    @if(request('id')>0)
                                        <div class="form-group">
                                            <label class="col-form-label">Status <span class="required text-danger">*</span></label>
                                            <select class="form-control" name="status">
                                                <option value="1" @if($bp->status=='1') selected @endif>Active</option>
                                                <option value="0" @if($bp->status=='0') selected @endif>Inactive</option>
                                            </select>
                                        </div>
                                    @endif

                                    <a href="{{route('admin.web.bp.view')}}" type="submit" class="btn btn-danger mt-4 pr-4 pl-4 text-white">Cancel</a>
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
