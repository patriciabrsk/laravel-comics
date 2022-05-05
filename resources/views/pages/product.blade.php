@extends('pages.layouts.app')

@section('title', 'Product')

@section('main-content')
    <div id="content">
        <div id="jumbotron"></div>
        <div class="container">
            <div class="single-card">
                <img src="{{ $card['thumb'] }}" alt="{{ $card['series'] }}">
                <p class="tag-top text-uppercase">
                    Comic book
                </p>
                <p class="tag-bottom text-uppercase">
                    view gallery
                </p>
            </div>
        </div>

@endsection
