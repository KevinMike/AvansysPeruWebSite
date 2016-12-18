@extends('master')
@section('nav')
    <nav id="mainav" class="clear">
        <!-- ################################################################################################ -->
        <ul class="clear">
            <li class="active"><a href="{{url('/')}}">Inicio</a></li>
            <li><a href="{{url('/informacion')}}">¿Quienes Somos?</a></li>
            <li><a href="{{url('/cursos')}}">Cursos</a></li>
            @if($especialidades)
                <li><a class="drop" href="#">Especialidades</a>
                    <ul>
                        @foreach($especialidades as $item)
                            <li><a href="{{asset('/curso/'.$item->id)}}">{{$item->nombre}}</a></li>
                        @endforeach
                    </ul>
                </li>
            @endif
            <li><a href="{{url('/preinscripciones')}}">Preinscripción</a></li>
            <li><a href="{{url('/galeria')}}">Galeria de Imágenes</a></li>
        </ul>
        <!-- ################################################################################################ -->
    </nav>
@endsection
@section('content')
<?php
$dias = array("Domingo", "Lunes", "Martes", "Miercoles", "Jueves", "Viernes", "Sábado");
$meses = array("Enero", "Febrero", "Marzo", "Abril", "Mayo", "Junio", "Julio", "Agosto", "Septiembre", "Octubre", "Noviembre", "Diciembre");
?>
<!-- main body -->
<!-- ################################################################################################ -->
<div class="sidebar one_quarter first">
    <!-- ################################################################################################ -->
    <h6>Otras Noticias</h6>
    <nav class="sdb_holder">
        <ul>
            @if($next)
                <li><a href="{{url('publicacion/'.$next->id)}}">
                    <strong><i class="fa fa-arrow-circle-left"></i></strong> {{$next->titulo}}
                    <figure>
                        <img src="{{asset('media/posts/'.$next->imagen)}}" alt="{{$next->titulo}}">
                        <time datetime="">{{$dias[date('w',strtotime($next->updated_at))]." ".date('d',strtotime($next->updated_at))." de ".$meses[date('n',strtotime($next->updated_at))-1]. " del ".date('Y',strtotime($next->updated_at))}}</time>
                    </figure>
                </a></li>
            @endif
            @if($previous)
                <li><a href="{{url('publicacion/'.$previous->id)}}">
                        <strong><i class="fa fa-arrow-circle-right"></i></strong> {{$previous->titulo}}
                        <figure>
                            <img src="{{asset('media/posts/'.$previous->imagen)}}" alt="{{$previous->titulo}}">
                            <time datetime="">{{$dias[date('w',strtotime($previous->updated_at))]." ".date('d',strtotime($previous->updated_at))." de ".$meses[date('n',strtotime($previous->updated_at))-1]. " del ".date('Y',strtotime($previous->updated_at))}}</time>
                        </figure>
                    </a></li>
            @endif
        </ul>
    </nav>
    <!-- ################################################################################################ -->
</div>
<!-- ################################################################################################ -->
<div id="content" class="three_quarter">
    <!-- ################################################################################################ -->
    <h1>{{$post->titulo}}</h1>
    <img class="imgr borderedbox" src="{{asset('media/posts/'.$post->imagen)}}" alt="">
    <strong class="text-left">{{$dias[date('w',strtotime($post->updated_at))]." ".date('d',strtotime($post->updated_at))." de ".$meses[date('n',strtotime($post->updated_at))-1]. " del ".date('Y',strtotime($post->updated_at))." , ".date("g:i a",strtotime($post->updated_at))}}</strong>
    <p><br></p>
    <div id="newsContent">
        <p>{!! nl2br($post->texto) !!}</p>
    </div>
    <!-- ################################################################################################ -->
</div>
<div id="comments">
    <h2>Comentarios de Facebook</h2>
    <div id="fb-root"></div>
    <div class="fb-comments" data-href="" data-numposts="5" width="100%"></div>
</div>
<!-- ################################################################################################ -->
<!-- / main body -->
<div class="clear"></div>
@endsection