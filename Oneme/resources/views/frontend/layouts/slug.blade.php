<div class="slug mt-3">
    <a href="{{route('index')}}">Trang chủ</a>
    @if(isset($first_slug))
        / <a href="{{route('category',['slug'=>$first_url])}}">{{$first_slug}}</a>
    @endif
    @if(isset($second_slug))
        / <a href="{{route('category',['slug'=>$second_url])}}">{{$second_slug}}</a>
    @endif
    @if(isset($third_slug))
        / <a href="{{route('product',['slug'=>$third_url])}}">{{$third_slug}}</a>
    @endif
</div>
