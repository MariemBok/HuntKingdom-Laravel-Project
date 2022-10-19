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
                                    <li class="breadcrumb-item active">Products</li>
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
                @if ($message=Session::get('successUpdate'))
                    <div class="alert alert-success">
                        <p>{{ $message }}</p>
                    </div>
                @endif
                <section id="main-content">
                    <div class="row">

                        <div class="col-lg-12">
                            <div class="card">
                                <div class="card-title">
                                    <h4>Show products </h4> <a href="{{url('back/product')}}" class="btn btn-dark btn-sm float-end"> back </a>
                                </div>
                                <div class="card-body">

                                    <div class="table-responsive">
                                        <a href="{{url('back/product/create')}}"
                                           class="btn btn-primary btn-sm float-end"> add </a>
                                        <table class="table table-hover ">
                                            <thead>
                                            <tr>
                                                <th>ID</th>
                                                <th>Name</th>
                                                <th>Description</th>
                                                <th>Price</th>
                                                <th>Quantity</th>
                                                <th>Picture</th>
                                                <th>Creation date</th>
                                                <th>Category</th>
                                                <th></th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            @foreach($products as $product)
                                                <tr>
                                                    <td>{{$product->id}}</td>
                                                    <td>{{$product->name}}</td>
                                                    <td>{{$product->description}}</td>
                                                    <td>{{$product->price}}</td>
                                                    <td>{{$product->quantity}}</td>
                                                    <td> <img src="{{  asset('uploads/products/'.$product->picture )}} "width="60px" height="60px" />
                                                    </td>
                                                    <td>{{$product->creationDate}}</td>
                                                    <td>{{$product->category}}</td>
                                                    <td><a href="{{url('back/product/'.$product->id.'/edit')}}"
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
                                                                        want to delete product {{$product->name}}</h5>
                                                                </div>
                                                                <div class="modal-footer">
                                                                    <button type="button" class="btn btn-secondary"
                                                                            data-dismiss="modal">Close
                                                                    </button>
                                                                    <form
                                                                        action="{{url('back/product/delete/'.$product->id)}}"
                                                                        method="POST">
                                                                        <button type="submit" class="btn btn-danger ">
                                                                            Yes.delete it
                                                                        </button>
                                                                    @csrf
                                                                    @method('DELETE')                    </div>
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
