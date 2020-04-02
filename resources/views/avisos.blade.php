@extends('layouts.externo')
@section('title', 'Quadro de avisos' )
@section('sidebar')
    @parent
    <p>^Barra superior adicionada do layout pai ^</p>
@endsection

@section('content')
    <p>Quadro de avisos</p>
    <br>
    <p>Olá , {{$nome}} ! Veja abaixo os avisos de Hoje: </p>

    @if($mostrar)
        Mostrando Aviso
    @else
        Esconde Aviso
    @endif

@foreach ($avisos as $aviso)
<p>Aviso {{$aviso['id']}}: {{$aviso['texto']}}</p>
@endforeach

@endsection
