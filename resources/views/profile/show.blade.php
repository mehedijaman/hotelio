@extends('layouts.app')
@section('content')
    <div class="container py-5">
        <div class="row">
            <div class="col-md-5 m-auto">
                <div class="card card-primary card-outline">
                    <div class="card-body">
                        <div class="text-center">
                            @if (Auth::user()->Photo)
                                <img src="/uploads/{{Auth::user()->Photo}}" alt="User_img" class="profile-user-img img-fluid img-circle">
                                @else
                                    <img src="{{URL::asset('/img/profile.png')}}" alt="User_img" class="profile-user-img img-fluid img-circle">
                            @endif
                        </div>
                        <h3 class="profile-username text-center">{{ Auth::user()->name }}</h3>
                        <p class="text-muted text-center">
                            Member since 
                            {{ Auth::user()->created_at->format('D.M. Y') }}
                        </p>
                        <ul class="list-group list-group-unbordered mb-3">
                             <li class="list-group-item">
                                <b>Role</b>
                                <a href="#" class="text-dark float-right">{{ Auth::user()->Role }}</a>
                            </li>
                             <li class="list-group-item">
                                <b>Status</b>
                                <a href="#" class="text-dark float-right"> 
                                    @if(Auth::user()->Status) <b class="text-success">Active</b>
                                    @endif
                                    @if(!Auth::user()->Status) <b class="text-danger">Active</b>
                                    @endif
                                </a>
                            </li>
                            <li class="list-group-item">
                                <b>Email</b>
                                <a href="#" class=" text-dark float-right">{{ Auth::user()->email }}</a>
                            </li>
                            <li class="list-group-item">
                                <b>LastLogin</b>
                                <a href="#" class=" text-dark float-right">{{ Auth::user()->LastLogin }}</a>
                            </li>
                        </ul>
                        <a href="" class="btn btn-primary btn-block text-capitalize">Edit Profile</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection