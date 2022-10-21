@extends('backOffice.base')


@section('title', 'Home')


@section('body')

<div class="content-wrap">
        <div class="main">
            <div class="container">
                <!-- /# row -->
                <section id="main-content">
                    <!-- /# row -->
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="card">
                            <div class="card-header">
                                <div class="card-title">
                                    <h5>Edit Category</h5>
                                </div>
                                </div>
                                <div class="card-body">
                                    <div class="basic-form">
                                        <form action="{{ route('categories.update', ['category' => $category->id]) }}" method="POST" enctype="multipart/form-data">
                                            @csrf
                                            @method('PUT')
                                            <div class="form-group">
                                                <label>Name</label>
                                                <input type="text" class="form-control" value="{{$category->name}}" name="name">
                                                @error('name')<small class="text-bg-danger">{{$message}}</small> @enderror

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
