@extends('layouts.frontend')
@section('content')
{{--<a href="{{route('home')}}">HOME</a>--}}
{{--<a href="{{route('elfinder.tinymce5')}}">File</a>--}}

{{-- <div class="slug p-1 text-white" >--}}
{{--     <a href="#" class="text-white">Category</a> >>--}}
{{--     <a href="#" class="text-white">Product</a>--}}
{{-- </div>--}}
<div class="container-fluid">
    <div class="banner">
        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
            </ol>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="{{asset('userfiles/images/Rectangle 1.png')}}" class="d-block w-100" alt="he" />
                </div>
                <div class="carousel-item">
                    <img src="{{asset('userfiles/images/Rectangle 1.png')}}" class="d-block w-100" alt="..." />
                </div>
                <div class="carousel-item">
                    <img src="{{asset('userfiles/images/Rectangle 1.png')}}" class="d-block w-100" alt="..." />
                </div>
                <div class="carousel-item">
                    <img src="{{asset('userfiles/images/Rectangle 1.png')}}" class="d-block w-100" alt="..." />
                </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
    </div>
    <div class="hot-product"></div>
</div>
@endsection

