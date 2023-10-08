@extends('layouts.app')

@section('title')
    Contacts
@endsection

@section('body')
    <div class="main-content-inner">
        <div class="row">
            <div class="col-12 mt-5">
                <div class="card">
                    <div class="card-body">
                        <h4 class="header-title float-right"><a type="button" href="{{route('contact.create')}}" class="btn btn-primary mb-3 text-white">Add New</a></h4>
                        <div class="data-tables datatable-dark">
                            @if ($message = Session::get('destroy_message'))
                                <p class="text-center text-danger">{{ $message }}</p>
                            @elseif( $message = Session::get('store_message'))
                                <p class="text-center text-success">{{ $message }}</p>
                            @elseif( $message = Session::get('update_message'))
                                <p class="text-center text-primary">{{ $message }}</p>
                            @endif
                            <table id="dataTable3" style="width: 100%;" class="text-center">
                                <thead class="text-capitalize">
                                <tr>
                                    <th style="width: 1%">#</th>
                                    <th>Headline</th>
                                    <th>Description</th>
                                    <th>Location</th>
                                    <th>Phone</th>
                                    <th>Email</th>
                                    <th style="width: 15%">Option</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($contacts as $contact)
                                    <tr>
                                        <td>{{$loop->iteration}}</td>
                                        <td class="text-left">{{$contact->headline}}</td>
                                        <td class="text-left">{!! $contact->description !!}</td>
                                        <td class="text-left">{{$contact->location}}</td>
                                        <td class="text-left">{{$contact->phone}}</td>
                                        <td class="text-left">{{$contact->email}}</td>
                                        <td class="text-center">
                                            <form action="{{route('contact.destroy', ['id' => $contact->id])}}" method="post">
                                                @csrf
                                                <a href="{{route('contact.edit',['id' => $contact->id])}}" title="Update" class="btn btn-primary btn-sm">
                                                    <i class="fa fa-edit"></i>
                                                </a>
                                                <a href="{{route('contact.show',['id' => $contact->id])}}" title="Update" class="btn btn-secondary btn-sm">
                                                    <i class="fa fa-book"></i>
                                                </a>
                                                <button type="submit" class="btn btn-danger btn-sm" title="Delete" onclick="return confirm('Are you confirm to delete?');">
                                                    <i class="fa fa-trash"></i>
                                                </button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div></div>
@endsection
