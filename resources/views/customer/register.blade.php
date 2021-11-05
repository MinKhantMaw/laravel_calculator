@extends('layouts.app')


@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-6 offset-3">
                <div class="card shadow mt-3">
                    <div class="card-header bg-dark text-white text-center ">
                        Register
                    </div>
                    <div class="card-body">
                        <form action="{{route('Customer#create')}}" method="post">
                            @csrf
                            <div class="form-group mb-2">
                                <label for="">Name</label>
                                <input type="text" name="name" class="form-control" placeholder="Enter Name">
                            </div>
                            <div class="form-group mb-2">
                                <label for="">Email</label>
                                <input type="email" name="name" class="form-control" placeholder="Enter Name">
                            </div>
                            <div class="form-group mb-2">
                                <label for="">Address</label>
                                <textarea name="address"  class="form-control" placeholder="Enter Your Address"></textarea>
                            </div>
                            <div class="form-group mb-2">
                                <label for="">Gender</label>
                                <select name="gender" class="form-control">
                                    <option value="empty">Choose Gender</option>
                                    <option value="1">Male</option>
                                    <option value="2">Female</option>
                                    <option value="0">Other</option>
                                </select>
                            </div>
                            <div class="form-group mb-2">
                                <label for="">Date Of Birth</label>
                                <input type="date" class="form-control" name="dateOfBirth" placeholder="Enter your date of birth">
                            </div>
                            <div class="form-group mb-2">
                                <label for="">Phone</label>
                                <input type="number" class="form-control" name="phone" placeholder="Enter your Phone">
                            </div>
                            <div class="mb-2 ">
                                <input type="submit" value="Register" class="btn btn-primary">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection