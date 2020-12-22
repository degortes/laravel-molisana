@extends('layouts.app')
@section('page-title','Prodotti')

@section('content')

<section id="products">
    <div class="container">
        <h2>Le Lunghe</h2>
        <div class="card-container">
            @foreach ($pasta as $type)
                @if ($type['tipo']== 'lunga')

                <div class="card">
                    <img src="{{$type['src'] }}" alt="">
                    <div class="hide-card">
                        <a href="#">{{$type['titolo'] }}</a>
                    </div>
                </div>
                @endif

            @endforeach

        </div>
        <h2>Le corte</h2>
        <div class="card-container">
            @foreach ($pasta as $type)
                @if ($type['tipo']== 'corta')

                <div class="card">
                    <img src="{{$type['src'] }}" alt="">
                    <div class="hide-card">
                        <a href="#">{{$type['titolo'] }}</a>
                    </div>
                </div>
                @endif

            @endforeach

        </div>
        <h2>Le cortissime</h2>
        <div class="card-container">
            @foreach ($pasta as $type)
                @if ($type['tipo'] == 'cortissima')

                <div class="card">
                    <img src="{{$type['src'] }}" alt="">
                    <div class="hide-card">
                        <a href="#">{{$type['titolo'] }} ciao</a>
                    </div>
                </div>
                @endif

            @endforeach

        </div>

    </div>

</section>



@endsection
