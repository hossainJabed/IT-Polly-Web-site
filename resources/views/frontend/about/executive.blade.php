@extends('frontend.master')

@section('title')
    Executive page
@endsection
@section('body')
    <!-- Committee start -->
    <section class="py-2">
        <div class="container">
            <div class="row">
                <h4 class="text-center bg-primary text-white">ITPOLLY Executive Committee 2022-23</h4>
            </div>
        </div>

    </section>
    <section class="Committee">
        <div class="container">
            <div class="row">
                @foreach($executives as $executive)
                <div class="col-lg-3 col-md-6  mt-2 pt-2">
                    <div class="card h-100" style="width: 19rem;">
                        <img src="{{asset($executive->image)}}" class="card-img-top" alt="..." height="250px" width="10px">
                        <div class="card-body p-0">
                            <h4 class="card-title mt-4 text-center"><a href="#" class="text-dark ">{{$executive->name}}</a></h4>
                            <p class="card-titel-icon text-center text-muted"><i class="fa-solid fa-location-dot me-2"></i>{{$executive->designation}}</p>
                            <div class="card-text">
                                <ul class="">
                                    <li class="text-muted"><i class="fa-solid fa-briefcase me-2 "></i>{{$executive->company}}</li>
{{--                                    <li class="text-muted"><i class="fa-regular fa-paper-plane me-2"></i>House-06, Road-28, Block-K, Banani,--}}
{{--                                        Dhaka-1213</li>--}}
{{--                                    <li class="text-muted"><i class="fa-solid fa-phone me-2"></i>8831593</li>--}}
{{--                                    <li class="text-muted"><i class="fa-regular fa-envelope me-2"></i>emdad@optimaxbd.net</li>--}}
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
{{--                <div class="">--}}
{{--                    {{$executives->onEachSide(1)->links()}}--}}
{{--                </div>--}}
            </div>
        </div>
    </section>
    <!-- Committee end -->




@endsection


