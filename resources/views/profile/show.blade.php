@extends('layouts.app')
@section('content')
    <div class="container py-5">
        <div class="row">
            <div class="col-md-5 m-auto">
                <div class="card card-primary card-outline">
                    <div class="card-body">
                        <div class="text-center">
                            {{-- <img src="{{URL::asset('/img/profile.png')}}" alt="User_img" class="profile-user-img img-fluid img-circle"> --}}
                            @if (Auth::user()->Photo)
                                <img src="/uploads/{{Auth::user()->Photo}}" alt="User_img" class="profile-user-img img-fluid img-circle">
                                @else
                                     <img src="{{URL::asset('/img/profile.png')}}" alt="User_img" class="profile-user-img img-fluid img-circle">
                            @endif
                        </div>
                        {{-- {{ Auth::user()->name }}
                            <small>Member since {{ Auth::user()->created_at->format('D-M. Y') }}</small>
                        {{ Auth::user()->email }}
                        {{ Auth::user()->Status }}
                        {{ Auth::user()->Role }} --}}
                            
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection