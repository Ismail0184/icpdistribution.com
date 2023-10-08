@extends('layouts.app')

@section('title')
    Contact View
@endsection

@section('body')
    <div class="main-content-inner">
        <div class="row">
            <div class="col-lg-6 col-ml-12">
                <div class="row">
                    <div class="col-12 mt-5">
                        <div class="card">
                            <div class="card-body">
                                <table class="table" style="width: 100%">
                                    <tr>
                                        <th style="width: 20%">Headline</th>
                                        <th style="width: 1%">:</th>
                                        <td style="width: 79%">{{$contact->headline}}</td>
                                    </tr>
                                    <tr>
                                        <th>Description</th>
                                        <th>:</th>
                                        <td>{!! $contact->description !!}</td>
                                    </tr>
                                    <tr>
                                        <th>Location</th>
                                        <th>:</th>
                                        <td>{{$contact->location}}</td>
                                    </tr>
                                    <tr>
                                        <th>Map URL</th>
                                        <th>:</th>
                                        <td>{{$contact->map}}</td>
                                    </tr>
                                    <tr>
                                        <th>Phone</th>
                                        <th>:</th>
                                        <td>{{$contact->phone}}</td>
                                    </tr>
                                    <tr>
                                        <th>Mobile</th>
                                        <th>:</th>
                                        <td>{{$contact->mobile}}</td>
                                    </tr>
                                    <tr>
                                        <th>Email</th>
                                        <th>:</th>
                                        <td>{{$contact->email}}</td>
                                    </tr>
                                </table>
                                <a href="{{route('contact')}}" type="submit" class="btn btn-danger mt-4 pr-4 pl-4 text-white">Back</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
