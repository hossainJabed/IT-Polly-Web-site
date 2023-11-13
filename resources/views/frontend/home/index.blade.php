@extends('frontend.master')
@section('title')
    Home page
@endsection

@section('body')
    <div id="loader" ></div>
    <section class="py-4">
        <div class="hero mt-2">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 col-lg-6">
                        <div class="title-heading text-center text-lg-start">

                            <h6 class="heading fw-bold mb-3 mt-3 text-center" >(ITPOLLY)</h6>
                            <p class=" text-muted mx-auto mx-lg-start mb-0 text-center">
                                ITPolly is the backbone of hundreds of organizations.  Among them are some skilled system admins of broadband,
                                internet service providers, software firms, hardware importers.  This is the first time in Bangladesh that
                                so many organizations of the IT sector are under the same umbrella.....</p>

                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="bg-light px-2 position-relative">
                            <video  controls="" loop="" width="100%">
                                <source src="{{asset('/')}}frontend/video/Facebook%205412454308873166(360p).mp4" type="video/mp4">
                            </video>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

<!--notice start--->

    <section class="Notices mt-3">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12 text-center">
                    <div class="section-title mb-4 pb-2">
                        <h4 class="title mb-4 bg-primary text-white">Notices</h4>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="table-responsive bg-white shadow rounded mt-2">
                    <table class="table mb-0 table-center">
                        <thead class="bg-light">
                        </thead>
                        <table class="table table-light">
                            <thead>
                            <tr>
                                <th scope="col">Title</th>
                                <th scope="col">Description</th>
                                <th scope="col">Date</th>
                                <th scope="col">View</th>
                                <th scope="col">Download</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($notices as $notice)
                            <tr>

                                <td>{{($notice->title)}}</td>
                                <td>{{($notice->description)}}</td>
                                <td>{{($notice->date)}}</td>
                                <td> <a href="{{ route('show.front-notice', ['id' => $notice->id]) }}" class="btn btn-info" ><i class="fa fa-book"></i>View</a></td>
                                <td> <a href="{{asset('notice-images/'.$notice->file)}}" class="btn btn-info" ><i class="fa fa-download"></i> Download Details</a></td>
                            </tr>
                            @endforeach
                            </tbody>
                        </table>

                    </table>
                </div>
            </div>
            <div class="col-12 mt-4 pt-2 text-center">
                <a href="notice" class="btn btn-primary">See All Notices <i class="fa-solid fa-angle-right"></i></a>
            </div>
        </div>
    </section>

    <!--notice end--->

    <!-- Latest News start -->

    <section class="Latest-News mt-5 ">
        <div class="container">
            <div class="section-title mb-4 pb-2 text-center">
                <h4 class="title mb-4 bg-primary text-white">Latest News</h4>
            </div>
            <div class="row">
                @foreach($news as $item)

                <div class="col-lg-3 col-md-6  mt-4 pt-2">
                    <div class="card h-100" style="width: 19rem;">
                        <img src="{{asset($item->image)}}" class="card-img-top" alt="..." height="250px" width="20px">
{{--                        <div class="author">--}}
{{--                            <small class="text-light user d-block"><i class="fa-regular fa-user"></i>Infolink--}}
{{--                                Limited</small>--}}
{{--                            <small class="text-light date"><i class="fa-regular fa-calendar-days"></i> Nov 14,--}}
{{--                                2021</small>--}}
{{--                        </div>--}}
                        <div class="card-body">

                            <p class="card-text text-dark"><a href="">{{$item->name}}</a></p>

                        </div>
                        <div class="post-meta d-flex justify-content-between mt-3 pb-2">
                            <ul class="list-unstyled mb-0">
                                <li class="list-inline-item me-2 mb-0">
                                    <a href="" class="text-muted like"><i class="fa-regular fa-heart me-1"></i>33</a>
                                </li>
                                <li class="list-inline-item">
                                    <a href="" class="text-muted comments">
                                        <i class="fa-regular fa-comment me-1"></i>08</a>
                                </li>
                            </ul>
                            <a href="{{route("details",["id"=>$item->id])}}" class="text-muted readmore">Read More<i
                                    class="fa-solid fa-angle-right ms-1"></i>
                            </a>
                        </div>
                    </div>
                </div>

                @endforeach
            </div>
            <div class="col-12 mt-4 pt-2 text-center ">
                <a href="{{route('all-news')}}" class="btn btn-primary">See All News <i class="fa-solid fa-angle-right"></i></a>
            </div>

        </div>
    </section>
    <!-- Latest News End -->
    <!-- Events start -->
    <section class=" py-2 ">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12 text-center">
                    <div class="section-title mb-4 pb-2">
                        <h4 class="title mb-4 mt-5 bg-primary text-white">Events</h4>
                        <p class="text-muted para-desc mx-auto mb-0">We organise regular events.</p>
                    </div>
                </div><!--end col-->
            </div>
            <div class="row ">
                @foreach($event as $item)

                <div class="col-lg-3 col-md-6  mt-4 pt-2">
                    <div class="card h-100 " style="width: 19rem;">
                        <img src="{{asset($item->image)}}" class="card-img-top" alt="..." height="250px" width="80px">
{{--                        <div class="author">--}}
{{--                            <small class="text-light user d-block"><i class="fa-regular fa-user"></i>Infolink--}}
{{--                                Limited</small>--}}
{{--                            <small class="text-light date"><i class="fa-regular fa-calendar-days"></i> Nov 14,--}}
{{--                                2021</small>--}}
{{--                        </div>--}}
                        <div class="card-body">

                            <p class="card-text text-dark"><a href="">{{$item->name}}</a></p>

                        </div>
                        <div class="post-meta d-flex justify-content-between mt-3 pb-2">
                            <ul class="list-unstyled mb-0">
                                <li class="list-inline-item me-2 mb-0">
                                    <a href="" class="text-muted like"><i class="fa-regular fa-heart me-1"></i>33</a>
                                </li>
                                <li class="list-inline-item">
                                    <a href="" class="text-muted comments">
                                        <i class="fa-regular fa-comment me-1"></i>08</a>
                                </li>
                            </ul>
                            <a href="{{route('details',['id'=>$item->id])}}" class="text-muted readmore">Read More<i
                                    class="fa-solid fa-angle-right ms-1"></i>
                            </a>
                        </div>
                    </div>

                </div>

                @endforeach
            </div>
            <div class="col-12 mt-4 pt-2 text-center">
                <a href="{{route('all-event')}}" class="btn btn-primary">See All Event <i class="fa-solid fa-angle-right"></i></a>
            </div>
        </div>
    </section>



    <!-- Events End -->
    <!-- Gallery start -->
    <section class="py-2">
        <div class="container">
            <div class="row">
                <h2 class="text-center bg-primary text-white">Gallery</h2>
            </div>
        </div>
    </section>
    <section class="Gallery mt-5">
        <div class="container">
            <div class="row">
                @foreach($gallerys as $gallery)
                    <div class="col-lg-3 col-md-6  mt-2 pt-2">
                        <div class="card h-100" style="width: 19rem;">
                            <img src="{{asset($gallery->image)}}" class="card-img-top" alt="..." height="250px" width="80px">
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    <div class="col-12 mt-4 pt-2 mb-3 text-center">
        <a href="{{route('media')}}" class="btn btn-primary">See All Gallery <i class="fa-solid fa-angle-right"></i></a>
    </div>

    <!-- Gallery end -->
@endsection

