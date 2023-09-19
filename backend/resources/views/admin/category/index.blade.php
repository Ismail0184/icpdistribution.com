@extends('layouts.app')

@section('title')
    Categories
@endsection

@section('body')
    <div class="main-content-inner">
        <div class="row">
    <div class="col-12 mt-5">
        <div class="card">
            <div class="card-body">
                <h4 class="header-title float-right"><a type="button" href="{{route('category.create')}}" class="btn btn-primary mb-3 text-white">Add New</a></h4>
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
                            <th>Name</th>
                            <th>Description</th>
                            <th>Image</th>
                            <th>Status</th>
                            <th style="width: 15%">Option</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($categories as $category)
                        <tr>
                            <td>{{$loop->iteration}}</td>
                            <td class="text-left">{{$category->name}}</td>
                            <td class="text-left">{{$category->description}}</td>
                            <td></td>
                            <td>
                                @if($category->status == '1') <span class="badge badge-success">Active</span>
                                @elseif($category->status == '0') <span class="badge badge-danger">Inactive</span>
                                @endif
                            </td>
                            <td class="text-center">
                                <form action="{{route('category.destroy', ['id' => $category->id])}}" method="post">
                                    @csrf
                                    <a href="{{route('category.edit',['id' => $category->id])}}" title="Update" class="btn btn-primary btn-sm">
                                        <i class="fa fa-edit"></i>
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
