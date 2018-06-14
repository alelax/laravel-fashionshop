@extends('layouts.app')

@section('tab_title')
    Home
@endsection

@section('page_content')
    
    <div class="col-xs-12">
        <form action="{{ route('add_product') }}" method="post">
            {{ csrf_field() }}
            <input type="text" name="title" placeholder="Product's title">
            <input type="text" name="brand" placeholder="Product's brand">
            <textarea name="description" id="" cols="30" rows="10" placeholder="product's description"></textarea>
            <input type="text" name="price" placeholder="Product's price">
            <input type="text" name="image" placeholder="Product's image">
            <input type="submit" value="Load Product">
        </form>
    </div>

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