<html>
<head>
    <meta charset="UTF-8"/>
    <title>{{$title}}</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <link rel="stylesheet" href="{!!asset('bootstrap/css/bootstrap.min.css')!!}" type="text/css"/>
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"
          integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
    <script src="{{asset('bootstrap/js/jquery.js')}}"></script>
    <script src="{{asset('bootstrap/js/poper.js')}}"></script>
    <script src="{{asset('bootstrap/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('bootstrap/js/scrollreveal.min.js')}}"></script>
    <link rel="stylesheet" href="{{asset('css/layout.css')}}" />
</head>
<?php
$categories=\App\Models\Category::get();
?>
<body>
<div class="container-fluid">
    <header>
        <nav class="navbar navbar-expand-lg navbar-light bg-light menu box-shadow fixed-top">
            <!--logo-->
            <a class="navbar-brand" href="#">
                <span class="text-white">ONELINK</span>
            </a>
            <!--menu-->
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                    aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"><i class="fa fa-bars" aria-hidden="true"></i></span>
            </button>
            <!--reponsive-->
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="{{route('index')}}">Trang chủ</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Sản phẩm</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Danh mục
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            @foreach($categories as $category)
                            <a class="dropdown-item" href="{{route('category',['slug'=>$category->slug])}}">{{$category->name}}</a>
                            @endforeach
                        </div>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Giới thiệu</a>
                    </li>
                </ul>
                <ul class="nav navbar-nav navbar-right d-flex">
                @if(backpack_auth()->check())

                        <li><a class="nav-link" href="{{route('backpack.account.info')}}"> {{backpack_user()->name}}</a></li>
                       @if(backpack_user()->role <= 1)
                        <li><a class="nav-link" href="{{route('backpack.dashboard')}}"> Quản trị </a></li>
                        @endif
                        <li><a class="nav-link" href="{{route('backpack.auth.logout')}}"> Đăng xuất </a></li>
                @else
                        <li><a class="nav-link" href="{{route('backpack.auth.login')}}"> Đăng nhập </a></li>
                        <li><a class="nav-link" href="{{route('backpack.auth.register')}}"> Đăng ký </a></li>

                    @endif
                    <a href="{{route('cart.index')}}" class="align-self-center link-style-none text-white"><i class="fa fa-shopping-cart" aria-hidden="true"></i></a>
                </ul>
            </div>
        </nav>
    </header>
    <div class="pt-5"></div>
    <div class="pt-4"></div>
    <div class="container-fluid">
        @yield('content')
    </div>
    <footer>
        <div class="row">
            <!-- left-->
            <div class="col-md-6 col-12 email-request">
                <form action="#" method="post">
                    <h3 style="color: #D68484">Bạn có muốn nhận tin<br> khuyến mãi thường xuyên?</h3>
                        <input type="email" placeholder="Điền email của bạn" class="btn text-left">
                        <button type="submit" class="btn btn-success"><i class="far fa-paper-plane"></i></button>
                </form>
            </div>
            <!-- right-->
            <div class="col-md-6 col-12 bottom-nav row">
                <ul class="text-bold">
                    <li><a href="#">Về chúng tôi</a></li>
                    <li><a href="#">Chính sách bảo mật</a></li>
                    <li><a href="#">Đăng ký làm đại lý</a></li>
                    <li><a href="#">Phản hồi về dịch vụ</a></li>
                </ul>
            </div>
        </div>
    </footer>
    <div class="copyright area">
    </div>
</div>
</body>
</html>
