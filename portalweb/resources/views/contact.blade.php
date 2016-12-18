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
<!-- main body -->
    <!-- ################################################################################################ -->
    <div class="sidebar one_quarter first">
        <!-- ################################################################################################ -->
        <h6>Dirección</h6>
        <div class="sdb_holder">
            <address>
                Distrito Gregorio Albarracín <br>
                Asoc. Las Viñas Mz “B” Lote 4 <br>
                Tacna/Perú <br>
                <br>
                Referencia: <br>
                A una cuadra y media de SENASA, antes de llegar al mercado CENEPA <br>
            </address>
        </div>
        <h6>Teléfono</h6>
        <div class="sdb_holder">
            <address>
                Tel: 052 – 60 89 27 <br>
                Cel: 930 77 37 17 <br>
            </address>
        </div>
        <h6>Correo Electrónico</h6>
        <div class="sdb_holder">
            <address>
                <a href="mailto:informes@avansysperu.com">informes@avansysperu.com</a> <br>
                <a href="mailto:gerencia@avansysperu.com">gerencia@avansysperu.com</a>
            </address>
        </div>
        <br>
        <div class="sdb_holder">
            <h6>Visita nuestro fanpage en Facebook</h6>
            <div id="fb-root"></div>
            <div class="fb-page" data-href="https://www.facebook.com/avansys.peru.tacna/" data-tabs="timeline"
                 data-small-header="false" data-adapt-container-width="true" data-hide-cover="false"
                 data-show-facepile="true">
                <div class="fb-xfbml-parse-ignore">
                    <blockquote cite="https://www.facebook.com/avansys.peru.tacna/"><a
                                href="https://www.facebook.com/avansys.peru.tacna/">Centro de Capacitacion en
                            Infomatica Empresarial Avansys - Peru</a></blockquote>
                </div>
            </div>
        </div>
        <!-- ################################################################################################ -->
    </div>
    <!-- ################################################################################################ -->
    <!-- ################################################################################################ -->
    <div id="content" class="three_quarter">
        <!-- ################################################################################################ -->
        <h1>¿Deseas ponerte en contacto con nosotros?</h1>
        <p>No dudes en escribirnos a travez de este formulario web, nosotros te responderemos a la brevedad</p>
        <div id="comments">
            {!! Form::open(['url' => '/send','method'=>'post']) !!}
            <div class="form-group">
                {!! Form::label('email','Email',array('class'=>"col-md-4 control-label")) !!}
                {!! Form::email('email',null,['class' => 'form-control','required' => true]) !!}
            </div>
            <div class="form-group">
                {!! Form::label('subject','Asunto',array('class'=>"col-md-4 control-label")) !!}
                {!! Form::text('subject',null, ['class' => 'form-control','required' => true]) !!}
            </div>
            <div class="form-group">
                {!! Form::label('body','Mensaje',array('class'=>"col-md-4 control-label")) !!}
                {!! Form::textarea('body',null, ['class' => 'form-control','required' => true,'id'=> 'message']) !!}
            </div>
            <div>
                {!! Form::submit('Enviar') !!}
                {!! Form::reset('Limpiar') !!}
            </div>
            {!! Form::close() !!}
        </div>

        <h1>Ubicanos en</h1>
        <iframe src="https://www.google.com/maps/embed?pb=!1m0!3m2!1ses!2spe!4v1463494503304!6m8!1m7!1smC041MgKAVJgfq5EKsOHVg!2m2!1d-18.03145126902847!2d-70.25128430640441!3f271.7646457334082!4f-2.8925925203103873!5f0.7820865974627469"
                width="100%" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
        <!-- ################################################################################################ -->
    </div>
    <!-- ################################################################################################ -->
    <!-- / main body -->
    <div class="clear"></div>


@endsection
