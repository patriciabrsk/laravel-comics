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
                    <img src="{{ $card['thumb'] }}" alt="{{ $card['series'] }}" />
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
@endsection
