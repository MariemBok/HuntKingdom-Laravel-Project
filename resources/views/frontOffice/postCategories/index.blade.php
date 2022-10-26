@extends('backOffice.base')


@section('title', 'Home')


@section('body')
<body>

    <div class="card card-default">
        <div class="card-header">
       <a href="/categories/create" class="btn btn-success">ADD CATEGORY</a>
        </div>

        <table class="table table-hover ">
         <thead>
         <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Creation date</th>
                <th></th>
        </tr>
         </thead>


        <tbody>
        @foreach($categories as $category)
        <tr>
        <td>{{$category->id}}</td>
        <td>{{$category->name}}</td>
        <td>{{$category->creationDate}}</td>

        <td>
                <form action="{{route('categories.destroy',$category->id) }}" method="POST">

                    <a href="{{url('categories/'. $category->id .'/edit')}}" class="button btn-sm">Edit</a>

                    @csrf
                    @method('DELETE')

                    <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                </form>
            </td>
    </tr>
        @endforeach
        </tbody>
        </table>
    </div>
</body>

@endsection
