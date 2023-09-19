@extends('layouts.app')

@section('title')
    @if(request('id')>0) Update @else Create @endif Unit
@endsection

@section('body')
    <div class="main-content-inner">
        <div class="row">
            <div class="col-lg-6 col-ml-12">
                <div class="row">
                    <div class="col-12 mt-5">
                        <div class="card">
                            <div class="card-body">
                                <form action="@if(request('id')>0) {{route('unit.update', ['id'=>$unit->id])}} @else {{route('unit.store')}} @endif" method="post" enctype="multipart/form-data">
                                    @csrf
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Unit Name <span class="required text-danger">*</span></label>
                                        <input type="text" class="form-control" required @if(request('id')>0) value="{{$unit->name}}" @endif name="name">
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Unit Details <span class="required text-danger">*</span></label>
                                        <input type="text" class="form-control" @if(request('id')>0) value="{{$unit->details}}" @endif name="details">
                                    </div>
                                    @if(request('id')>0)
                                        <div class="form-group">
                                            <label class="col-form-label">Status <span class="required text-danger">*</span></label>
                                            <select class="form-control" name="status">
                                                <option value="1" @if($unit->status=='1') selected @endif>Active</option>
                                                <option value="0" @if($unit->status=='0') selected @endif>Inactive</option>
                                            </select>
                                        </div>
                                    @endif
                                    <a href="{{route('unit')}}" type="submit" class="btn btn-danger mt-4 pr-4 pl-4 text-white">Cancel</a>
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
