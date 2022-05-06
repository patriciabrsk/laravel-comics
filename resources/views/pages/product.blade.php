@extends('pages.layouts.app')

@section('title', 'Product')

@section('main-content')
    <div id="content">
        <div id="jumbotron"></div>
        <div class="blue-bg">
            <div class="single-card container">
                <img src="{{ $card['thumb'] }}" alt="{{ $card['series'] }}">
                <p class="tag-top text-uppercase">
                    Comic book
                </p>
                <p class="tag-bottom text-uppercase">
                    view gallery
                </p>
            </div>
        </div>
        <div class="container flex white-bg">
            <div class="product-info">
                <h1>{{ $card['title'] }}</h1>
                <div class="flex green-bg">
                    <div class="price">
                        <p>U.S. Price</p><span>{{ $card['price'] }}</span>
                        <p class="avail text-uppercase">Available</p>
                    </div>
                    <div class="availability">Check Availability</div>
                </div>
                <div class="description">
                    <p>{{ $card['description'] }}</p>
                </div>
            </div>
            <div class="ad">
                <h4 class="text-uppercase">Advertisement</h4>
                <img src="{{ asset('/img/adv.jpg') }}" alt="Ad">
            </div>
        </div>
        <section class="grey-bg">
            <div class="container flex"></div>
        </section>
@endsection
