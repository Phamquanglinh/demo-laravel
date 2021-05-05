
@extends('frontend.layouts.app')

@section('content')
    <link href="{{asset('css/category.css')}}" rel="stylesheet" type="text/css"/>
    <?php
    $category = \App\Models\Category::where('slug',$slug)->get();
    $products=$category[0]->products;
    $title='Danh mục:: '.$category[0]->name;
    if($category[0]->children){
       $first_slug=$category[0]->children->name;
       $first_url = $category[0]->children->slug;
       $second_slug=$category[0]->name;
        $second_url = $category[0]->slug;
   }else{
        $first_slug=$category[0]->name;
        $first_url=$category[0]->slug;
    }
    ?>
    @include('frontend.layouts.slug')
    <div class="row p-3 n-3 rectangle-20">
        @foreach($products as $item)
        <div class="rectangle-2 col-md-3 col-sm-6 col-12 bg-white p-4">
            <div class="n-9">
                <a href="{{route('product',['slug'=>$item->slug])}}" class="link-style-none">
                <div class="row ">
                    <div class="col-md-7 col-12 product-img">
                        <img src="{{$item->thumbnail}}" width="100%">
                    </div>
                    <div class="col-md-5 col-12">
                        <div class="badge-danger badge">
                           - {{round((1-$item->price/$item->old_price)*100)}} %
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="price col-12">
                        <p> {{$item->price/1000}}.000đ</p>
                    </div>
                </div>
                <div class="row">
                    <div class="old-price col-12">
                        <p> {{$item->old_price/1000}}.000đ</p>
                    </div>
                </div>
                <div class="row">
                    <div class="product-name col-md-12 col-12">
                        <p>{{$item->name}}</p>
                    </div>
                </div>
                <div class="row">
                    <div class="brand col-12">
                        <p>Nhãn Hiệu: Phượng Channel</p>
                    </div>
                </div>
                <div class="row">
                    <div class="origin col-12">
                        <p>Xuất xứ: Quảng Châu (Not TQ)</p>
                    </div>
                </div>
                <div class="row">
                    <div class="buy-cout col-12">
                        <p>999 Người mua</p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <p class="rate">5 <img class="star" src="{{asset('uploads/images/star.png')}}"> </p>
                    </div>
                </div>
                </a>
            </div>
         </div>
        @endforeach
    </div>

@endsection
