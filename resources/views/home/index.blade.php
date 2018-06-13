@extends('layouts.app')

@section('tab_title')
    Home
@endsection

@section('page_content')
    
    @foreach ($prods as $prod)
        <div class="card col-xs-3 px-0">

            <div class="img-cnt col-xs-12 px-xs-0">
                <img src=" {{ $prod['image'] }} " alt="">
            </div>
            <div class="title-cnt col-xs-12 text-center">
                <h5 class="title"> {{ $prod['name'] }} </h5>
            </div>
            <div class="price-cnt col-xs-12 text-center">
                <p class="price">price: {{ $prod['price'] }}</p>
            </div>
            <div class="btn-cnt col-xs-12 text-center">
                <button class="buy-btn"> <a href="{{route('product-detail', ['id' => $prod['id']] ) }}"> BUY </a> </button>
            </div>

        </div>
    @endforeach

@endsection