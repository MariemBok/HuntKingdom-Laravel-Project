
@extends('frontOffice.base')


@section('title', 'Shop')

<head> <title></title>
</head>


@section('body')

<body>
    <!-- Page Preloder -->
    <div id="preloder">
        <div class="loader"></div>
    </div>


    <!-- Header Section End -->

    <!-- Breadcrumb Section Begin -->
    <section class="breadcrumb-option">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb__text">
                        <h4>Shop</h4>
                        <div class="breadcrumb__links">
                            <a href="{{url('/')}}">Home</a>
                            <span>Shop</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Breadcrumb Section End -->

    <!-- Shop Section Begin -->
    <section class="shop spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-3">
                    <div class="shop__sidebar">
                        <div class="shop__sidebar__search">
                            <form action="#">
                                <input type="text" placeholder="Search...">
                                <button type="submit"><span class="icon_search"></span></button>
                            </form>
                        </div>
                        <div class="shop__sidebar__accordion">
                            <div class="accordion" id="accordionExample">
                                <div class="card">
                                    <div class="card-heading">
                                        <a data-toggle="collapse" data-target="#collapseOne">Categories</a>
                                    </div>
                                    <div id="collapseOne" class="collapse show" data-parent="#accordionExample">
                                        <div class="card-body">
                                            <div class="shop__sidebar__categories">
                                                <ul class="nice-scroll">
                                                    @foreach($categories as $category)
                                                    <li><a href="{{url('shop/productByCategory/'.$category->id)}}">{{$category->name}}</a></li>
                                                    @endforeach
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card">
                                    <div class="card-heading">
                                        <a data-toggle="collapse" data-target="#collapseThree">Filter Price</a>
                                    </div>
                                    <div id="collapseThree" class="collapse show" data-parent="#accordionExample">
                                        <div class="card-body">
                                            <div class="shop__sidebar__price">
                                                <ul>
                                                    <li ><a href="#">bhg</a></li>
                                                </ul>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-9">
                    <div class="shop__product__option">
                        <div class="row">
                            <div class="col-lg-6 col-md-6 col-sm-6">
                                <div class="shop__product__option__left">
                                    <p>Showing {{$productCount}} products</p>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-6">
                                <div class="shop__product__option__right">
                                    <p>Sort by Price:</p>
                                    <label for="sort_by"></label><select id="sort_by" name="sort_by" class="form-control">
                                        <option value="lowest_price">Low To High</option>
                                        <option value="highest_price">High To low</option>
                                    </select>
                                </div>                            </div>
                        </div>
                    </div>
                    <div class="row">
                        @foreach($products as $product)
                        <div class="col-lg-4 col-md-6 col-sm-6">
                            <div class="product__item sale">
                                <div class="product__item__pic set-bg" data-setbg="{{  asset('uploads/products/'.$product->picture )}}"  >
                                    <span class="label"></span>
                                    <ul class="product__hover">
                                        <li><a href="#"><img src="{{url('frontOffice/img/icon/heart.png')}}" alt=""></a></li>
                                        <li><a href="#"><img src="{{url('frontOffice/img/icon/compare.png')}}" alt=""> <span>Compare</span></a>
                                        </li>
                                        <li><a href="{{url('/shop-details/'.$product->id)}}"><img src="{{url('frontOffice/img/icon/search.png')}}" alt=""></a></li>
                                    </ul>
                                </div>
                                <div class="product__item__text">
                                    <h6>{{$product->name}}</h6>
                                    <form action="{{url('/add_cart/'.$product->id)}}" method="Post">
                                        @csrf
                                        <div class="row">
                                            <div class="col-md-4">
                                                <input type="number" name="quantity" value="1" min="1" style="width: 100px"/>
                                            </div>
                                            <div class="col-md-4">
                                                <input class="add-cart" type="submit" value="+Add To Cart" />
                                            </div>
                                        </div>
                                    </form>
                                    <h5>{{$product->price}}</h5>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="product__pagination">
                                <a class="active" href="#">1</a>
                                <a href="#">2</a>
                                <a href="#">3</a>
                                <span>...</span>
                                <a href="#">21</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Shop Section End -->


    <!-- Search End -->

    <!-- Js Plugins -->

  {{--  <script src="https://code.jquery.com/jquery-3.6.1.js" integrity="sha256-3zlB5s2uwoUzrXK3BT7AX3FyvojsraNFxCc2vC/7pNI=" crossorigin="anonymous">

    $(document).ready(function(e) {
        $('#sort_by').on('change', function () {
            let sort_by = $('#sort_by').val();
          $.ajax({
                url: "{{url('/shop/sort_by')}}",
                method: "GET",
                data: {sort_by: sort_by},
                success: function (res) {
                    $('.search-result').html(res);
                }
            });
        });
    })
</script>--}}

</body>
@endsection

