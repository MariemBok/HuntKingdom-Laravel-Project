@extends('backOffice.base')


@section('title', 'table')




@section('body')

    <div class="content-wrap">
        <div class="main">
            <div class="container-fluid">
                <div class="row">
                    <!-- /# column -->
                    <div class="col-lg-4 p-l-0 title-margin-left">
                        <div class="page-header">
                            <div class="page-title">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
                                    <li class="breadcrumb-item active">Category</li>
                                </ol>
                            </div>
                        </div>
                    </div>
                    <!-- /# column -->
                </div>
                <!-- /# row -->
                @if ($message=Session::get('success'))
                    <div class="alert alert-success">
                        <p>{{ $message }}</p>
                    </div>
                @endif
                @if ($message=Session::get('s'))
                    <div class="alert alert-success">
                        <p>{{ $message }}</p>
                    </div>
                @endif
                <section id="main-content">
                    <div class="row">

                        <div class="col-lg-12">
                            <div class="card">
                                <div class="card-title">
                                    <h4>Show category </h4>  <a href="{{url('back/category/create')}}"
                                                                       class="btn btn-primary btn-sm float-end"> add </a>
                                </div>
                                <div class="card-body">
                                    <div class="table-responsive">
                                        <table class="table table-hover ">
                                            <thead>
                                            <tr>
                                                <th>ID</th>
                                                <th>Name</th>
                                                <th>Description</th>
                                                <th>Creation date</th>
                                                <th></th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            @foreach($categories as $category)
                                                <tr>
                                                    <td>{{$category->id}}</td>
                                                    <td>{{$category->name}}</td>
                                                    <td>{{$category->description}}</td>
                                                    <td>{{$category->creationDate}}</td>
                                                    <td><a href="{{url('back/category/'.$category->id.'/edit')}}"
                                                           class="btn btn-info">Edit</a></td>
                                                    <td class="color-danger">
                                                        <button type="submit" class="btn btn-danger "
                                                                data-toggle="modal" data-target="#DeleteModal">Delete
                                                        </button>
                                                    </td>
                                                </tr>
                                                <div>
                                                    <div class="modal fade" id="DeleteModal" tabindex="-1"
                                                         aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                        <div class="modal-dialog">
                                                            <div class="modal-content">
                                                                <div class="modal-header">
                                                                    <h5 class="modal-title" id="exampleModalLabel">You
                                                                        want to delete category {{$category->name}}</h5>
                                                                </div>
                                                                <div class="modal-footer">
                                                                    <button type="button" class="btn btn-secondary"
                                                                            data-dismiss="modal">Close
                                                                    </button>
                                                                    <form
                                                                        action="{{url('back/category/delete/'.$category->id)}}"
                                                                        method="POST">
                                                                        <button type="submit" class="btn btn-danger ">
                                                                            Yes.delete it
                                                                        </button>
                                                                    @csrf
                                                                    @method('DELETE')
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            @endforeach
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                            <!-- /# card -->
                        </div>
                        <!-- /# column -->
                    </div>
                    <!-- /# row -->


                </section>
            </div>
        </div>
    </div>

@endsection
