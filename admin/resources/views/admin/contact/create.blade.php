@extends('layouts.app')

@section('title')
    Create Contact
@endsection

@section('body')
    <script src="//js.nicedit.com/nicEdit-latest.js" type="text/javascript"></script>
    <script type="text/javascript">bkLib.onDomLoaded(nicEditors.allTextAreas);</script>
    <div class="main-content-inner">
        <div class="row">
            <div class="col-lg-6 col-ml-12">
                <div class="row">
                    <div class="col-12 mt-5">
                        <div class="card">
                            <div class="card-body">
                                <form action="@if(request('id')>0) {{route('contact.update', ['id'=>$contact->id])}} @else {{route('contact.store')}} @endif" method="post" enctype="multipart/form-data">
                                    @csrf
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Headline <span class="required text-danger">*</span></label>
                                        <input type="text" class="form-control" required @if(request('id')>0) value="{{$contact->headline}}" @endif name="headline">
                                    </div>
                                    <div class="form-group">
                                        <label for="description">Description</label>
                                        <textarea name="description" class="form-control">@if(request('id')>0){{$contact->description}} @endif</textarea>
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Location <span class="required text-danger">*</span></label>
                                        <input type="text" class="form-control" required @if(request('id')>0) value="{{$contact->location}}" @endif name="location">
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Map URL <span class="required text-danger">*</span></label>
                                        <input type="text" class="form-control" required @if(request('id')>0) value="{{$contact->map}}" @endif name="map">
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Phone <span class="required text-danger">*</span></label>
                                        <input type="text" class="form-control" required @if(request('id')>0) value="{{$contact->phone}}" @endif name="phone">
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Mobile <span class="required text-danger">*</span></label>
                                        <input type="text" class="form-control" required @if(request('id')>0) value="{{$contact->mobile}}" @endif name="mobile">
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Email <span class="required text-danger">*</span></label>
                                        <input type="text" class="form-control" required @if(request('id')>0) value="{{$contact->email}}" @endif name="email">
                                    </div>
                                    @if(request('id')>0)
                                        <div class="form-group">
                                            <label class="col-form-label">Status <span class="required text-danger">*</span></label>
                                            <select class="form-control" name="status">
                                                <option value="1" @if($contact->status=='1') selected @endif>Active</option>
                                                <option value="0" @if($contact->status=='0') selected @endif>Inactive</option>
                                            </select>
                                        </div>
                                    @endif

                                    <a href="{{route('contact')}}" type="submit" class="btn btn-danger mt-4 pr-4 pl-4 text-white">Cancel</a>
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
