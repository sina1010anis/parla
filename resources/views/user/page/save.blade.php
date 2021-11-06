@extends('user.index')

@section('index')
    <div class="col-12 position-relative">
        <div><h5 class="text-end font-S my-2 color-b-600">محصولات سیو شده</h5></div>
        <div class="line"></div>
    </div>
    <div class="col-12 overflow-scroll bg-light rounded-3 position-relative" style="height: 500px;background-color:unset!important; ">
        @if($save_products->count() != 0)
            @foreach($save_products as $save)
                <a href="{{route('product.show' , ['slug'=> $save->product->slug])}}" class="card d-inline-block m-2 " style="width: 18rem;text-decoration: none!important;">
                    <img src="{{url('image/product/'.$save->product->image)}}" class="card-img-top" alt="{{$save->product->name}}">
                    <div class="card-body color-b-600 f-14">
                        <p align="center" class="card-text">{{$save->product->name}}</p>
                    </div>
                </a>
            @endforeach
        @else
            <count-vue image="error_2.png" text="محصولی یافت نشد !"></count-vue>
        @endif
    </div>
@endsection
