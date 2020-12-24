@extends('layouts.app')
@section('page-title','Prodotti')

@section('content')

<section id="products">
    <div class="container">

        @foreach ($pasta as $tipo => $prodotto)

            <h2>le {{ $tipo }}</h2>
            <div class="card-container">
                @foreach ($prodotto as $index => $dettaglio)
                <div class="card">
                    <img src="{{$dettaglio['src'] }}" alt="">
                    <div class="hide-card">
                        <a href="{{route('details',['id' => $index ])}}">{{$dettaglio['titolo'] }}</a>
                    </div>
                </div>
                @endforeach
            </div>

        @endforeach
    </div>

</section>



@endsection
