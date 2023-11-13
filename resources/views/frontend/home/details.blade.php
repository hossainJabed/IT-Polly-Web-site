@extends('frontend.master')
@section('title', ' details')
@section('body')
    <section class="py-5">
        <div class="container bg-secondary">
            <div class="row">
                <div class="col-md-8 mx-auto">
                    <div class="card rounded-0">
                        <div class="card-header text-center fw-bold">
                            <h3 class="text-center">{{ $news->type }}</h3>
                        </div>
                        <div class="card-header text-center fw-bold">
                            <h3 class="text-center">{{ $news->name }}</h3>
                        </div>
                        <div class="card-body">
                            <div class="text-center">
                                <img src="{{ asset($news->image) }}" alt="Loading..." height="250px" width="20px">
                            </div>
                            <h4 class="text-center">{{ $news->description }}</h4>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </div>
    </section>
@endsection

