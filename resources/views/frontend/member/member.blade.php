@extends('frontend.master')

@section('title')
    Member list page
@endsection

@section('body')
    <section class="py-5 bg-primary">
        <div class="container">
            <h4 class="text-center">Members List</h4>
        </div>
    </section>

    <section class="py-5">
        <div class="container">
            <form action="{{ route('member.find') }}" method="post" class="input-group">
                @csrf
                <input type="text" name="search" class="form-control" placeholder="Search by name here...">
                <input class="btn btn-outline-primary" type="submit" value="Search"/>
            </form>
        </div>
    </section>
    <!-- Committee start -->
    <section class="Committee">
        <div class="container">
            <div class="row">
                @foreach($members as $member)
                <div class="col-lg-3 col-md-6  mt-2 pt-2">
                    <div class="card h-100" style="width: 19rem;">
                        <img src="{{asset($member->image)}}" class="card-img-top" alt="..." height="250px" width="20px">
                        <div class="card-body p-0">

                            <h4 class="card-title mt-4 text-center"><a href="#" class="text-dark ">{{$member->name}}</a></h4>
                            <p class="card-titel-icon text-center text-muted"><i class="fa-solid fa-location-dot me-2"></i></p>
                            <div class="card-text">
                                <ul class="">
                                    <li class="text-muted"><i class="fa-solid fa-briefcase me-2 "></i>{{$member->company}}</li>
                                    <li class="text-muted"><i class="fa-regular fa-paper-plane me-2"></i>{{$member->address}}</li>
                                    <li class="text-muted"><i class="fa-solid fa-phone me-2"></i>{{$member->mobile}}</li>
                                    <li class="text-muted"><i class="fa-regular fa-envelope me-2"></i>{{$member->description}}</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
            @if(!request()->has('search'))
            <div>
                {{ $members->onEachSide(1)->links() }}
            </div>
            @endif
        </div>
    </section>
    <!-- Committee end -->



@endsection

