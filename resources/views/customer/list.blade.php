@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">

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
                                    <button class="btn btn-sm btn-primary">Edit</button>
                                    <button class="btn btn-sm btn-danger">Delete</button>
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
