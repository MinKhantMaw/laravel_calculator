@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                @if (Session::has('delete'))
                        <div class="alert alert-success alert-dismissible fade show mt-3" role="alert">
                            {{Session::get('delete')}}
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                          </div>
                        @endif
                <table class="text-center table table-striped  table-hover mt-4">
                    <thead>
                        <th>id</th>
                        <th>name</th>
                        <th>address</th>
                        <th>phone</th>
                        <th>Action</th>
                    </thead>
                    <tbody>
                        @foreach ($customer as $item)
                            <tr>
                                <td>{{ $item->customer_id }}</td>
                                <td>{{ $item->name }}</td>
                                <td>{{ $item->address }}</td>
                                <td>{{ $item->phone }}</td>
                                <td>
                                    <a href="{{route('Customer#seemore',$item->customer_id)}}" class="btn btn-sm btn-primary">View</a>
                                    <a href="" class="btn btn-sm btn-warning">Edit</a>
                                    <a href="{{route("Customer#delete",$item->customer_id)}}" class="btn btn-sm btn-danger">Delete</a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
                <a href="{{ route('Customer#register') }}">
                    <button class="btn btn-sm btn-info">Back</button>
                </a>
            </div>
        </div>
    </div>
@endsection
