@extends('master')
@section('nav')
    <nav id="mainav" class="clear">
        <!-- ################################################################################################ -->
        <ul class="clear">
            <li><a href="{{url('/')}}">Inicio</a></li>
            <li><a href="{{url('/informacion')}}">¿Quienes Somos?</a></li>
            <li class="active"><a href="{{url('/cursos')}}">Cursos</a></li>
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
    <ul class="nospace">
        <li class="btmspace-15"><em class="heading">Aula Virtual</em> <img class="borderedbox" src="{{asset('/images/services/aula.jpg')}}" alt=""><p>Desarrollo de Sesiones Virtuales mediante nuestra plataforma virtual
            </p></li>
        <li class="btmspace-15"><em class="heading">Manuales</em> <img class="borderedbox" src="{{asset('/images/services/manuales.jpg')}}" alt=""><p>Por cada Curso al participante se le hace entrega de su manual Teórico - Práctico completamente gratis </p></li>
        <li class="btmspace-15"><em class="heading">Clases con proyector Multimedia</em> <img class="borderedbox" src="{{asset('/images/services/clases.jpg')}}" alt=""><p>Todas Nuestras sesiones se desarrollan con proyector multimedia y equipos conectados en Red y Conexion a Internet </p></li>
        <li class="btmspace-15"><em class="heading">Horarios Flexibles</em> <img class="borderedbox" src="{{asset('/images/services/horario.jpg')}}" alt=""><p>Brindamos horarios flexibles deacuerdo a la necesidad del participante </p></li>
        <li class="btmspace-15"><em class="heading">Costo Único</em> <img class="borderedbox" src="{{asset('/images/services/costo.jpg')}}" alt=""><p>Todos nuestros modulos tiene un costo unico que les Incluyen su Matricula, Mensualidades y sus Libros
            </p></li>
    </ul>
    <!-- ################################################################################################ -->
</div>
<div id="content" class="three_quarter">
    <div id="portfolio">
        <ul class="nospace clear">
            <?php $i = 0; ?>
            @foreach($curso as $item)
                <?php
                if($i%2==0)
                    {
                        echo '<li class="one_half first">';
                    }
                    else{
                        echo '<li class="one_half">';
                    }
                    $i++;
                ?>
                    <article>
                        <h2><a href="{{url('/curso/'.$item->id)}}">{{$item->nombre}}</a></h2>
                        <img class="imgr borderedbox" style="height:100px;" src="{{asset('media/cursos/logos/'.$item->logo)}}" alt="">
                        <p id="newsContent">
                            Este curso inicia el <strong>{{ date('d-m-Y', strtotime($item->fecha_inicio)) }}</strong>, con una duración de <strong>{{$item->duracion}}</strong>.
                            <br>
                            La frecuencia horaria es de <strong>{{$item->frecuencia}}</strong> por semana, de <strong>{{$item->horario}}</strong>.
                            <br>
                            El costo del curso es de <strong>{{$item->costo}}</strong>.
                        </p>
                        <p class="right"><a href="{{url('/curso/'.$item->id)}}">Más información &raquo;</a></p>
                    </article>
                </li>
            @endforeach
        </ul>
        <nav class="pagination">
            <?php echo $curso->render(); ?>
        </nav>
    </div>
</div>
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<div id="twitter" class="group btmspace-30">
    <div class="one_quarter first center"><a href="http://www.ccptacna.org.pe/portal/index.php"><img height="100px" src="{{asset('/images/contadores.png')}}" alt=""></a></div>
    <div class="three_quarter bold">
        <p>COLEGIO DE CONTADORES PUBLICOS DE TACNA</p>
        <br>
        <p>El Centro de Capacitación en Informática Empresarial Avansys - Perú, tiene un convenio firmado con el Colegio de Contadores Públicos de Tacna, esta entidad auspicia y certifica los cursos y especialidades dictados en Avansys - Perú.</p>
    </div>
</div>
<!-- ################################################################################################ -->
<!-- / main body -->
<div class="clear"></div>
@endsection