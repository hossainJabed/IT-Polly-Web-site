@extends('backend.include.master')

@section('section')
    <div class="content-wrapper" style="min-height: 1302.12px;">

        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h2>Member List</h2>
                    </div>
                    <div class="col-sm-6">
                        @if(session('message'))
                            <div class="alert alert-success alert-dismissible">
                                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                                <h5><i class="icon fas fa-check"></i> Alert!</h5>
                                {{session('message')}}
                            </div>
                        @elseif(session('status-danger'))
                            <div class="alert alert-danger alert-dismissible">
                                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                                <h5><i class="icon fas fa-check"></i> Alert!</h5>
                                {{session('status-danger')}}
                            </div>
                        @endif
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active">Gallery</li>
                        </ol>
                    </div>
                </div>
            </div>
        </section>

        <section class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <div class="col-sm-12">
                                    <h3 class="card-title">Manage All Category</h3>
                                    <h3 class="card-title float-right"><a href="{{route('category-index')}}" class="btn btn-sm btn-success">Add New</a></h3>
                                </div>
                            </div>
                            <div class="card-body">
                                <div id="example1_wrapper" class="dataTables_wrapper dt-bootstrap4">

                                    <div class="row">
                                        <div class="col-sm-12">

                                            <table id="example1" class="table table-bordered table-striped dataTable dtr-inline" aria-describedby="example1_info">
                                                <thead>
                                                <tr>
                                                    <th class="sorting sorting_asc"rowspan="1" colspan="1">S/N</th>
                                                    <th class="sorting sorting_asc"rowspan="1" colspan="1">Name</th>
                                                    <th class="sorting sorting_asc"rowspan="1" colspan="1">Description</th>
                                                    <th class="sorting sorting_asc"rowspan="1" colspan="1">Status</th>
                                                    <th class="sorting sorting_asc"rowspan="1" colspan="1">Action</th>

                                                </tr>
                                                </thead>
                                                <tbody>
                                                @foreach($categories as $category)

                                                    <tr class="odd">
                                                        <td>{{$loop->iteration}}</td>
                                                        <td>{{$category->name}}</td>
                                                        <td>{{$category->description}}</td>
                                                        <td>
                                                            <span class="badge {{ $category->status == 1 ? 'badge-success' : 'badge-danger' }}">
                                                                {{ $category->status == 1 ? 'Activated' : 'Deactivated'  }}
                                                            </span>
                                                        </td>
{{--                                                        <td><img src="{{asset($category->image)}}"style="height: 50px" alt=""></td>--}}
                                                        <td>
                                                            <a href="{{route('category-edit',['id' => $category->id])}}" class="btn btn-sm btn-warning" title="Edit Details"><i class="fa fa-edit"></i></a>
                                                        </td>
                                                    </tr>
                                                @endforeach
                                                </tbody>

                                            </table>
                                        </div>
                                    </div>

                                </div>
                            </div>

                        </div>

                    </div>

                </div>
            </div>

        </section>

    </div>

@endsection

