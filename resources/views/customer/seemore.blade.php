@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-6 offset-3">
                <div class="card shadow mt-5">
                    <div class="card-header text-center">Customer Details</div>
                    <div class="card-body fs-4 m-2">
                        <div class="">
                            <label for="">ID::{{$customer->customer_id}}</label>
                        </div>
                        <div class="">
                            <label for="">Name::{{$customer->name}}</label>
                        </div>
                        <div class="">
                            <label for="">Address::{{$customer->address}}</label>
                        </div>
                        <div class="">
                            <label for="">
                                Gender:: @if ($customer->gender == 1)
                                Male
                                @elseif ($customer->gender==2)
                                Female
                                @elseif ($customer->gender==0)
                                Other
                                @endif
                            </label>
                        </div>
                        <div class="">
                            <label for="">DOB:: {{$customer->date_of_birth}}</label>
                        </div>
                        <div class=""> 
                            <label for="">Phone::{{$customer->phone}}</label>
                        </div>
                    </div>
                    <div class="card-footer">
                        <a href="{{route('Customer#list')}}" class="btn btn-sm btn-primary">Back</a>
                    </div>
                </div>

            </div>
        </div>
    </div>
@endsection
