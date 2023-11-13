@extends('frontend.master')

@section('title')
    Photo list page
@endsection

@section('body')
    <section class="py-5 bg-primary">
        <div class="container">
            <h4 class="text-center text-white text-black"> Photo Gallery</h4>
        </div>
    </section>

    <section class="py-5">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12 filters-group-wrap">
                    <div class="filters-group">
                        <ul class="container-filter list-inline mb-0 filter-options text-center">
                            <li class="list-inline-item text-dark active"><a href="{{route('media')}}" class="btn btn-light">All Photo</a></li>
                            @foreach($categories as $category)
                            <li class="list-inline-item text-dark">
                                <a href="{{ route('photos.category-wise', ['id' => $category->id]) }}" class="btn btn-light">{{ $category->name }}</a>
                            </li>
                            @endforeach
                        </ul>
                    </div>
                </div>
            </div>
{{--            <div class="row">
                <div class="col-md-2">
                    <a href="{{route('media')}}" class="btn btn-light">All Photo</a>
                </div>
                @foreach($categories as $category)
                <div class="col-md-3">
                    <a href="{{ route('photos.category-wise', ['id' => $category->id]) }}" class="btn btn-light">{{ $category->name }}</a>
                </div>
                @endforeach
            </div>--}}
        </div>
    </section>
    <!-- Photo start -->
    <section class="Photo mt-5">
        <div class="container">
            <div class="row">
                @foreach($photos as $photo)
                    <div class="col-lg-3 col-md-6  mt-2 pt-2">
                        <div class="card h-100" style="width: 19rem;">
                            <img src="{{asset($photo->image)}}" class="card-img-top" alt="..." height="250px" width="20px">
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    <!-- Photo end -->



@endsection

