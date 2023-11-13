@extends('backend.include.master')

@section('section')
    <div class="content-wrapper" style="min-height: 1302.12px;">
        <section class="content">
            <div class="container-fluid">
                <div class="row">

                    <div class="col-md-8 offset-2">

                        <div class="card card-info mt-3">
                            <div class="card-header">
                                <h3 class="card-title">Edit Gallery List</h3>
                                <h3 class="card-title float-right"><a href="" class="btn  btn-sm btn-success">Show Table</a></h3>
                                <h3 class="text-center text-danger">{{session('message')}}</h3>
                            </div>
                            <form class="form-horizontal" method="post" action="{{route('gallery-update',['id'=> $gallery->id])}}" enctype="multipart/form-data">
                                @csrf
                                <div class="card-body">
                                    @if($errors->any())
                                        <div class="alert alert-danger alert-dismissible">
                                            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                                            <h5><i class="icon fas fa-check"></i> Alert!</h5>
                                            {{ implode('', $errors->all(':message')) }}
                                        </div>
                                    @endif
                                    <div class="form-group row">
                                        <label for="Image" class="col-sm-3 col-form-label">Image</label>
                                        <div class="col-sm-9">
                                            <input type="file" name="image" class="form-group"  id="Image" placeholder="Upload Your Image ">
                                            <img src="{{asset($gallery->image)}}" alt="" height="100" width="130"/>
                                        </div>
                                    </div>
                                </div>

                                <div class="card-footer">
                                    <button type="reset" class="btn btn-danger">Reset</button>
                                    <button type="submit" class="btn btn-success float-right">Save</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>

@endsection
