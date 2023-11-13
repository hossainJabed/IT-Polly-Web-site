@extends('frontend.master')
@section('title', 'Notice details')
@section('body')
    <section class="py-5">
        <div class="container">
            <div class="row">
                <div class="col-md-8 mx-auto">
                    <div class="card rounded-0">
                        <div class="card-header text-center fw-bold">{{ $notice->title }}</div>
                        <div class="card-body">
                            <div class="text-center">
                                <img src="{{ asset($notice->image) }}" alt="Loading..." height="210" width="220">
                            </div>
                            <p>{{ $notice->description }}</p>
                        </div>
                        <div class="card-footer">
                            Published date: {{ $notice->created_at->format('d/m/yy') }}</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
