@extends('backend.include.master')

@section('section')
    <div class="content-wrapper" style="min-height: 1302.12px;">
        <section class="content">
            <div class="container-fluid">
                <div class="row">

                    <div class="col-md-8 offset-2">

                        <div class="card card-info mt-3">
                            <div class="card-header">
                                <h3 class="card-title"> Create Photo Category</h3>
                                <h3 class="card-title float-right"><a href="" class="btn  btn-sm btn-success">Show Table</a></h3>
                                <h3 class="text-center text-danger">{{session('message')}}</h3>
                            </div>
                            <form class="form-horizontal" method="post" action="{{route('category-create')}}" enctype="multipart/form-data">
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
                                        <label for="description" class="col-sm-3 col-form-label">Name</label>
                                        <div class="col-sm-9">
                                            <input type="text" name="name" class="form-control" id="description" placeholder="Enter your name">
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label for="description" class="col-sm-3 col-form-label">Description</label>
                                        <div class="col-sm-9">
                                            <textarea type="text" name="description" class="form-control" id="description" placeholder="Enter your Description" ></textarea>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="status" class="col-sm-3 col-form-label"></label>
                                        <div class="col-sm-9">
                                            <label><input type="radio" name="status" class="form-group"  id="status" value="1" checked>Activate</label>
                                            <label><input type="radio" name="status" class="form-group"  id="status" value="0">Deactivate</label>
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
