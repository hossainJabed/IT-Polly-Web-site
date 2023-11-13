{{--<div>Login to: {{ session('client_email') }}</div>--}}
{{--<a href="{{ route('user.client-logout') }}">Logout</a>--}}

@extends('frontend.master')

@section('title')
    Dashboard
@endsection

@section('body')
    <section class="py-5">
        <div class="container">
            <div class="row">
                <div class="col-md-3">
                    <div class="card card-body bg-secondary">
                        <ul class="list-group">
                            <li class="list-group-item bg-primary"><a href="" class="text-white text-bold">My Dashboard</a></li>
                            <li class="list-group-item bg-warning"><a href="" class="text-white text-bold">My Profile</a></li>
                            <li class="list-group-item bg-light"><a href="{{route('user.client-logout')}}" class="text-light text-bold btn btn-danger  btn-outline-danger">Logout</a></li>

                        </ul>
                    </div>
                </div>
                <div class="col-md-9">
                    <div class="card card-body bg-primary">
                        <h1 class="text-center text-white">My Profile</h1>
                    </div>
                </div>
            </div>
        </div>

    </section>



@endsection
