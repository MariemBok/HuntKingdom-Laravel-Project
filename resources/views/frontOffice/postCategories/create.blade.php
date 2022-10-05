@extends('frontOffice.base')


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
                                    <li class="breadcrumb-item active">Category</li>
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
                                <div class="card-header">
                                  {{ isset($category) ? 'Edit Category' : 'Create Category' }}
                                </div>
                                <div class="card-body">
                                    <div class="basic-form">
                                        <form action="/catagories" method="POST"
                                              enctype="multipart/form-data">
                                            @csrf
                                            @if(isset($category))
                                            @method('PUT')
                                            @endif
                                            <div class="form-group">
                                                <label>name</label>
                                                <input type="text" name="name" class="form-control"  placeholder="Name" value="{{ isset($category) ? $category->name : ''}}" />
                                                @error('name')<p class="text-bg-danger"></p>{{$message}}</p> @enderror
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
