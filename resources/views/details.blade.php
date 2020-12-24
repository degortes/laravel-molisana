@extends('layouts.app')

@section('content')
    <div class="more-details">
        <img src="{{$prodotto['src-h']}}" alt="">
        <img src="{{$prodotto['src-p']}}" alt="">
    </div>
    <div class="prev">
        <a href="{{route('details',['id' => $prev ])}}">PREV</a>
    </div>
    <div class="next">
        <a href="{{route('details',['id' => $next ])}}">NEXT</a>
    </div>
    <div class="description container">
        <p>{!! $prodotto['descrizione']!!}</p>
    </div>
@endsection
