@extends('backOffice.base')


@section('title', 'Home')




@section('body')

    <div class="content-wrap">
        <div class="main">
            <div class="container-fluid">
                <div class="row">
                    <!-- /# column -->
                    <div class="col-lg-8 p-l-0 title-margin-left">
                        <div class="page-header">
                            <div class="page-title">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
                                    <li class="breadcrumb-item active">Products</li>
                                </ol>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /# row -->
                <section id="main-content">
                    <!-- /# row -->
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="card">
                                <div class="card-title">
                                    <h4>Create Product</h4> <a href="{{url('back/product')}}" class="btn btn-primary btn-sm float-end"> back </a>

                                </div>
                                <div class="card-body">
                                    <div class="basic-form">
                                        @if($errors->any())
                                            <div class="alert alert-warning">
                                                @foreach($errors->all() as $error)
                                                    <div>{{$error}}</div>
                                                @endforeach
                                            </div>
                                        @endif
                                        <form action="{{ url('back/product') }}" method="POST"
                                              enctype="multipart/form-data">
                                            @csrf
                                            <div class="form-group">
                                                <label>Name</label>
                                                <input type="text" name="name" class="form-control"  placeholder="Name"/>
                                                @error('name')<small class="text-bg-danger">{{$message}}</small> @enderror
                                            </div>
                                            <div class="form-group">
                                                <label>Description</label>
                                                <input type="text" class="form-control" name="description"
                                                       placeholder="Description"/>
                                                @error('description')<small
                                                    class="text-bg-danger">{{$message}}</small> @enderror
                                            </div>
                                            <div class="form-group">
                                                <label>Price</label>
                                                <input type="text" class="form-control" name="price"
                                                       placeholder="price"/>
                                                @error('price')<small
                                                    class="text-bg-danger">{{$message}}</small> @enderror
                                            </div>
                                            <div class="form-group">
                                                <label>Quantity</label>
                                                <input type="text" class="form-control" name="quantity"
                                                       placeholder="quantity"/>
                                                @error('quantity')<small
                                                    class="text-bg-danger">{{$message}}</small> @enderror
                                            </div>
                                            <div class="form-group">
                                                <label>Reference</label>
                                                <input type="text" class="form-control" name="reference"
                                                       placeholder="reference"/>
                                                @error('reference')<small
                                                    class="text-bg-danger">{{$message}}</small> @enderror
                                            </div>
                                            <div class="form-group">
                                                <label>Category</label>
                                                <select name="category" class="form-control">
                                                    @foreach ($categories as $category)
                                                    <option value="{{$category->id}}">{{$category->name}}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                            <div class="form-group">
                                                <label>Picture</label>
                                                <input type="file" class="form-control" name="picture"
                                                       placeholder="picture"/>
                                            </div>
                                            <button type="submit" class="btn btn-outline-primary">Submit</button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>

                </section>
            </div>
        </div>
    </div>

@endsection
