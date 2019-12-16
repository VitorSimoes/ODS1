@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-4">
                <div class="card">
                    <div class="card-header">Filtragem Colaborativa</div>
                    <div class="card-body">
                        {{$resultado   }}
                        @if($resultado  == "boticollection_boticario")
                            <img class="img" src="{!! asset('img/boticollection.jpg') !!}">
                        @elseif($resultado  == "batom_liquido_mate_quemdisseberenice")
                            <img class="img" src="{!! asset('img/batomliquidoquemdisseberenice.jpg') !!}">
                        @elseif($resultado  == "batom_volumao_quemdisseberenice")
                            <img class="img" src="{!! asset('img/volumao.jpg') !!}">
                        @elseif($resultado  == "coffee_boticario")
                            <img class="img" src="{!! asset('img/coffe.jpg') !!}">
                        @elseif($resultado  == "eau_de_parfum_eudora")
                            <img class="img" src="{!! asset('img/eau.jpg') !!}">
                        @elseif($resultado  == "impression_eudora")
                            <img class="img" src="{!! asset('img/impression.jpg') !!}">
                        @elseif($resultado  == "malbec_boticario")
                            <img class="img" src="{!! asset('img/malbec.jpg') !!}">
                        @elseif($resultado  == "nativaspa_boticario")
                            <img class="img" src="{!! asset('img/spa.jpeg') !!}">
                        @endif
                    </div>
                </div>
                <div class="card">
                    <div class="card-header">Vizinhos Mais Próximos</div>
                    <div class="card-body">
                        <ol>
                            @foreach($vizinhos  as $vizinho)
                                <li>{{$vizinho}}</li>
                            @endforeach
                        </ol>
                    </div>
                </div>

            </div>
            <div class="col-md-4">
                <div class="card">
                    <div class="card-header">Filtragem Baseada em Conteúdo</div>
                    <div class="card-body">
                        {{$resultado2}}
                        @if($resultado2  == "boticollection_boticario")
                            <img class="img" src="{!! asset('img/boticollection.jpg') !!}">
                        @elseif($resultado2  == "batom_liquido_mate_quemdisseberenice")
                            <img class="img" src="{!! asset('img/batomliquidoquemdisseberenice.jpg') !!}">
                        @elseif($resultado2  == "batom_volumao_quemdisseberenice")
                            <img class="img" src="{!! asset('img/volumao.jpg') !!}">
                        @elseif($resultado2  == "coffee_boticario")
                            <img class="img" src="{!! asset('img/coffe.jpg') !!}">
                        @elseif($resultado2  == "eau_de_parfum_eudora")
                            <img class="img" src="{!! asset('img/eau.jpg') !!}">
                        @elseif($resultado2  == "impression_eudora")
                            <img class="img" src="{!! asset('img/impression.jpg') !!}">
                        @elseif($resultado2  == "malbec_boticario")
                            <img class="img" src="{!! asset('img/malbec.jpg') !!}">
                        @elseif($resultado2  == "nativaspa_boticario")
                            <img class="img" src="{!! asset('img/spa.jpeg') !!}">
                        @endif
                    </div>
                </div>
                <div class="card">
                    <div class="card-header">Vizinhos Mais Próximos</div>
                    <div class="card-body">
                        <ol>
                            @foreach($vizinhos2  as $vizinho2)
                                <li>{{$vizinho2}}</li>
                            @endforeach
                        </ol>

                    </div>
                </div>

            </div>
            <div class="col-md-4">
                <div class="card">
                    <div class="card-header">Filtragem Híbrida</div>
                    <div class="card-body">
                        {{$resultado3  }}
                        @if($resultado3  == "boticollection_boticario")
                            <img class="img" src="{!! asset('img/boticollection.jpg') !!}">
                        @elseif($resultado3  == "batom_liquido_mate_quemdisseberenice")
                            <img class="img" src="{!! asset('img/batomliquidoquemdisseberenice.jpg') !!}">
                        @elseif($resultado3  == "batom_volumao_quemdisseberenice")
                            <img class="img" src="{!! asset('img/volumao.jpg') !!}">
                        @elseif($resultado3  == "coffee_boticario")
                            <img class="img" src="{!! asset('img/coffe.jpg') !!}">
                        @elseif($resultado3  == "eau_de_parfum_eudora")
                            <img class="img" src="{!! asset('img/eau.jpg') !!}">
                        @elseif($resultado3  == "impression_eudora")
                            <img class="img" src="{!! asset('img/impression.jpg') !!}">
                        @elseif($resultado3  == "malbec_boticario")
                            <img class="img" src="{!! asset('img/malbec.jpg') !!}">
                        @elseif($resultado3  == "nativaspa_boticario")
                            <img class="img" src="{!! asset('img/spa.jpeg') !!}">
                        @endif
                    </div>
                </div>
                <div class="card">
                    <div class="card-header">Vizinhos Mais Próximos</div>
                    <div class="card-body">
                        <ol>
                            @foreach($vizinhos3  as $vizinho3)
                                <li>{{$vizinho3}}</li>
                            @endforeach
                        </ol>

                    </div>
                </div>

            </div>
        </div>
    </div>
@endsection
<style>
    .img {
        width: 30%;
    }
</style>
