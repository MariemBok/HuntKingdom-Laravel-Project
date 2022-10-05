
@extends('frontOffice.base')


@section('title', 'Blog')




@section('body')
<body>
    <!-- Page Preloder -->
    <div id="preloder">
        <div class="loader"></div>
    </div>

    <!-- Header Section End -->

    <!-- Breadcrumb Section Begin -->
    <section class="breadcrumb-blog set-bg" data-setbg="{{url('frontOffice/img/breadcrumb-bg.jpg')}}">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h2>Our Blog</h2>
                </div>
            </div>
        </div>
    </section>
    <!-- Breadcrumb Section End -->

    <!-- Blog Section Begin -->
    <section class="blog spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-6 col-sm-6">
                <div class="list-group list-group-flush">
                <a href="/categories" class="list-group-item list-group-item-action bg-light">View Categories</a>
                <a href="{{ route('posts.create') }}" class="list-group-item list-group-item-action bg-light">Create posts</a>

            </div>
                </div>
                @foreach($posts as $post)
                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="blog__item">
                        <div class="blog__item__pic set-bg" data-setbg="/images/{{ $post->image }}"></div>
                        <div class="blog__item__text">
                            <span><img src="{{url('frontOffice/img/icon/calendar.png')}}" alt="">{{$post->creationDate}}</span>
                            <h5>{{$post->title}}</h5>
                            <a href="{{ route('posts.show',$post->id) }}">Read More</a>

                        </div>
                    </div>
                </div>
                @endforeach

            </div>
        </div>
    </section>
    <!-- Blog Section End -->


    <!-- Js Plugins -->

</body>
@endsection
