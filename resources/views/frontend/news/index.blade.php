@extends('frontend.master')

@section('title')
    All news
@endsection

@section('body')
    <section class="Latest-News mt-5 ">
        <div class="container">
            <div class="section-title mb-4 pb-2 text-center">
                <h4 class="title mb-4">Latest News</h4>
            </div>
            <div class="row">
                @foreach($news as $item)
                    @if($item->type == 'news')
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
                    @endif
                @endforeach
            </div>

        </div>
    </section>



@endsection
