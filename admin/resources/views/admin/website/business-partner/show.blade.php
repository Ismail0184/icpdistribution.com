@extends('layouts.app')

@section('title')
    Business Partner View
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
                                        <th>Partner Name</th>
                                        <th>:</th>
                                        <td>{{$bp->partner_name}}</td>
                                    </tr>
                                    <tr>
                                        <th>Website</th>
                                        <th>:</th>
                                        <td>{{$bp->website}}</td>
                                    </tr>
                                    <tr>
                                        <th>Description</th>
                                        <th>:</th>
                                        <td>{!! $bp->description !!}</td>
                                    </tr>

                                    <tr>
                                        <th>Logo</th>
                                        <th>:</th>
                                        <td><img src="{{asset($bp->logo)}}" alt="" height="100" width="130"/></td>
                                    </tr>
                                </table>
                                <a href="{{route('admin.web.bp.view')}}" type="submit" class="btn btn-danger mt-4 pr-4 pl-4 text-white">Back</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
