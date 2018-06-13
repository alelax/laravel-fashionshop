@extends('layouts.app')

@section('tab_title')
    Product
@endsection

@section('page_content')
    
    
    <div class="product-cnt">
        
        <div class="image-cnt">
            <img src=" {{ $product['image'] }} " alt="">
        </div>

        <div class="details">
            <h2> {{ $product['name'] }} </h2>
            <h3> {{ $product['brand'] }}</h3>
            <section> {{ $product['description'] }}</section>
            <p> {{ $product['price'] }}</p>
        </div>

    </div>
   

@endsection
