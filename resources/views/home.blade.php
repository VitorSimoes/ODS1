@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Resultado</div>
                    <div class="card-body">
                        {{$resultado}}
                        @if($resultado == "Boticario Boticollection")
                            <img src="{!! asset('img/boticollection.jpg') !!}">
                            @elseif($resultado == "batom_liquido_mate_quemdisseberenice")
                            <img src="{!! asset('img/batomliquidoquemdisseberenice.jpg') !!}">
                            @elseif($resultado == "batom_volumao_quemdisseberenice")
                            <img src="{!! asset('img/volumao.jpg') !!}">
                            @elseif($resultado == "coffee_boticario")
                            <img src="{!! asset('img/coffe.jpg') !!}">
                            @elseif($resultado == "eau_de_parfum_eudora")
                            <img src="{!! asset('img/eau.jpg') !!}">
                            @elseif($resultado == "impression_eudora")
                            <img src="{!! asset('img/impression.jpg') !!}">
                            @elseif($resultado == "malbec_boticario")
                            <img src="{!! asset('img/malbec.jpg') !!}">
                            @elseif($resultado == "nativaspa_boticario")
                            <img src="{!! asset('img/spa.jpg') !!}">
                        @endif
                    </div>
                </div>
                <div class="card">
                    <div class="card-header">Vizinhos Mais Próximos</div>
                    <div class="card-body">
                        <ol>
                            @foreach($vizinhos as $vizinho)
                                <li>{{$vizinho}}</li>
                            @endforeach
                        </ol>

                    </div>
                </div>

            </div>
        </div>
    </div>
@endsection
