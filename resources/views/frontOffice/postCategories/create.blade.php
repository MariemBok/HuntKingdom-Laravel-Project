@extends('backOffice.base')


@section('title', 'Home')


@section('body')
<div class="content-wrap">
        <div class="main">
            <div class="container">
                <div class="row">
                </div>
                <section id="main-content">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="card">
                                <div class="card-header">
                                <div class="card-title">
                                    <h5>Create Category</h5>
                                </div>
                                </div>
                                <div class="card-body">
                                    <div class="basic-form">
                                        <form action="{{ route('categories.store') }}" method="POST"
                                              enctype="multipart/form-data">
                                            @csrf

                                            <div class="form-group">
                                                <label>name</label>
                                                <input type="text" name="name" class="form-control"  placeholder="Name" />
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
