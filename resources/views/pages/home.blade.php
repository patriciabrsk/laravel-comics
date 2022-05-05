@extends('pages.layouts.app')

@section('title', 'Home')

@section('main-content')
<div id="content">
    <div id="jumbotron"></div>
        <div class="cards-wrapper flex">
            <div class="container">
                <h4 class="tag text-uppercase">Current series</h4>
                <div class="cards flex">
                    @foreach ($cards as $card)
                        <div id="card">
                            <img src="{{ $card['thumb'] }}" alt="{{ $card['series'] }}">
                            <h5 class="text-uppercase">{{ $card['series'] }}</h5>
                        </div>
                    @endforeach
                </div>
                <div class="button flex">
                    <button class="btn text-uppercase">Load More</button>
                </div>
            </div>
        </div>
    </div>
</div>

<div id="shop-menu" class="flex">
    <div class="menu-links container flex text-uppercase">
        <div class="link flex">
            @foreach ($menuLinks as $link)
            <a class="flex">
                <img src="{{ asset($link['img']) }}" alt="{{ $link['text'] }}">
                <span>{{ $link['text'] }}</span>
            </a>
            @endforeach
        </div>
    </div>
</div>
@endsection
