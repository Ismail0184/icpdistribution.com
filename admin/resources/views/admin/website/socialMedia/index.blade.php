@extends('layouts.app')

@section('title')
    Social Media
@endsection

@section('body')
    <div class="main-content-inner">
        <div class="row">
            <div class="col-lg-6 col-ml-12">
                <div class="row">
                    <div class="col-12 mt-5">
                        <div class="card">
                            <div class="card-body">
                                @if ($message = Session::get('update_message'))
                                    <p class="text-center text-primary">{{ $message }}</p>
                                @endif
                                <form action="{{route('socialMedia.update',['id'=>$data->id])}}" method="post" enctype="multipart/form-data">
                                    @csrf
                                <table class="table" style="width: 100%">
                                    <tr>
                                        <th style="width: 14%; vertical-align: middle">Facebook</th>
                                        <th style="width: 1%; vertical-align: middle">:</th>
                                        <td style="width: 85%; vertical-align: middle"><input type="text" name="facebook" value="{{$data->facebook}}" class="form-control" /></td>
                                    </tr>
                                    <tr>
                                        <th style="vertical-align: middle">Twitter</th>
                                        <th style="vertical-align: middle">:</th>
                                        <td style="vertical-align: middle"><input type="text" name="twitter" value="{{$data->twitter}}" class="form-control" /></td>
                                    </tr>
                                    <tr>
                                        <th style="vertical-align: middle">Linkedin</th>
                                        <th style="vertical-align: middle">:</th>
                                        <td style="vertical-align: middle"><input type="text" name="linkedin" value="{{$data->linkedin}}" class="form-control" /></td>
                                    </tr>
                                    <tr>
                                        <th style="vertical-align: middle">Youtube</th>
                                        <th style="vertical-align: middle">:</th>
                                        <td style="vertical-align: middle"><input type="text" name="youtube" value="{{$data->youtube}}" class="form-control" /></td>
                                    </tr>
                                    <tr>
                                        <th style="vertical-align: middle">Instagram</th>
                                        <th style="vertical-align: middle">:</th>
                                        <td style="vertical-align: middle"><input type="text" name="instagram" value="{{$data->instagram}}" class="form-control" /></td>
                                    </tr>
                                </table>
                                    <button type="submit" class="btn btn-primary mt-4 pr-4 pl-4">Update</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
