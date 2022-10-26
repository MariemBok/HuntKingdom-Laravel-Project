@extends('frontOffice.base')


@section('title', 'Blog')


@section('body')
<body>
<div class="container">
<div class="row">
<div class="card">
 <div class="card-header">
     <div class="card-title">
       <h5>Create a blog post</h5>
       </div>
  </div>
  <div class="card-body">
    <div class="col-lg-12 margin-tb">
        <div class="pull-right">
            <a class="btn btn-primary" href="{{ route('posts.index') }}"> Back</a>
        </div>
    </div>
</div>

@if ($errors->any())
    <div class="alert alert-danger">
        <strong>Whoops!</strong> There were some problems with your input.<br><br>
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
<div class="container">

<form action="{{ route('posts.store') }}" method="POST" enctype="multipart/form-data">
    @csrf
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Title:</strong>
                <input type="text" name="title" class="form-control" placeholder="Title" id='title'>
            </div>
            <div class="form-group">
                <strong>image</strong>
                <input type="file" name="image" class="form-control" id='image'>
            </div>

            <div class="form-group">
                <strong>Content</strong>
                <textarea class="form-control" style="height:150px" name="content" id='content' placeholder="content"></textarea>
            </div>
            <div class="form-group">
            <strong>Category</strong> <br>
            <label></label>
             <select class="text-align" name="category" id ="category" class="form-control">
              @foreach ($categories as $category)
              <option value="{{$category->id}}">{{$category->name}}</option>
              @endforeach
            </select>
             </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12 text-center ">
                <button type="submit" class="btn btn-block ">Create post</button>
        </div>
    </div>
</form>
</div>
    </div>
    </div>
    </div>
</body>
@endsection

