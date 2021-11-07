@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-6 offset-3">
                <div class="mt-3 text-end">
                    <a href="{{route('Customer#list')}}" class="btn btn-info btn-sm">List Page</a>
                </div>
                <div class="card shadow mt-3">
                    <div class="card-header bg-dark text-white text-center ">
                        Customer Data Edit
                    </div>

                    <div class="card-body">
                        {{-- @if (Session::has('edit'))
                        <div class="alert alert-success alert-dismissible fade show" role="alert">
                            {{Session::get('edit')}}
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                          </div>
                        @endif --}}
                        <form action="" method="post">
                            @csrf
                            <div class="form-group mb-2">
                                <label for="">Name</label>
                                <input type="text" name="name" class="form-control" value="{{$update->name}}" placeholder="Enter Name">
                            </div>
                            {{-- <div class="form-group mb-2">
                                <label for="">Email</label>
                                <input type="email" name="name" class="form-control" placeholder="Enter Name">
                            </div> --}}
                            <div class="form-group mb-2">
                                <label for="">Address</label>
                                <textarea name="address"  class="form-control" placeholder="Enter Your Address">{{$update->address}}</textarea>
                            </div>
                            <div class="form-group mb-2">
                                <label for="">Gender</label>
                                <select name="gender" value="{{$update->gender}}" class="form-control">
                                    <option value="empty">Choose Gender</option>
                                    <option value="1">Male</option>
                                    <option value="2">Female</option>
                                    <option value="0">Other</option>
                                </select>
                            </div>
                            <div class="form-group mb-2">
                                <label for="">Date Of Birth</label>
                                <input type="date" value="{{$update->date_of_birth}}" class="form-control" name="date_of_birth" placeholder="Enter your date of birth">
                            </div>
                            <div class="form-group mb-2">
                                <label for="">Phone</label>
                                <input type="number" value="{{$update->phone}}" class="form-control" name="phone" placeholder="Enter your Phone">
                            </div>
                            <div class="mb-2 ">
                                <input type="submit" value="Update" class="btn btn-primary">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
