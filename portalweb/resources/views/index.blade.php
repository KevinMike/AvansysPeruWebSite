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
    <div class="group btmspace-30">
        <!-- Left Column -->
        <div class="one_quarter first">
            <!-- ################################################################################################ -->
            <ul class="nospace">
                <li class="btmspace-15"><em class="heading">Aula Virtual</em> <img class="borderedbox"
                                                                                   src="{{asset('/images/services/aula.jpg')}}"
                                                                                   alt="">
                    <p>Desarrollo de Sesiones Virtuales mediante nuestra plataforma virtual
                    </p></li>
                <li class="btmspace-15"><em class="heading">Manuales</em> <img class="borderedbox"
                                                                               src="{{asset('/images/services/manuales.jpg')}}"
                                                                               alt="">
                    <p>Por cada Curso al participante se le hace entrega de su manual Teórico - Práctico completamente
                        gratis </p></li>
                <li class="btmspace-15"><em class="heading">Clases con proyector Multimedia</em> <img
                            class="borderedbox" src="{{asset('/images/services/clases.jpg')}}" alt="">
                    <p>Todas Nuestras sesiones se desarrollan con proyector multimedia y equipos conectados en Red y
                        Conexion a Internet </p></li>
                <li class="btmspace-15"><em class="heading">Horarios Flexibles</em> <img class="borderedbox"
                                                                                         src="{{asset('/images/services/horario.jpg')}}"
                                                                                         alt="">
                    <p>Brindamos horarios flexibles deacuerdo a la necesidad del participante </p></li>
                <li class="btmspace-15"><em class="heading">Costo Único</em> <img class="borderedbox"
                                                                                  src="{{asset('/images/services/costo.jpg')}}"
                                                                                  alt="">
                    <p>Todos nuestros modulos tiene un costo unico que les Incluyen su Matricula, Mensualidades y sus
                        Libros
                    </p></li>
            </ul>
            <!-- ################################################################################################ -->
        </div>
        <!-- / Left Column -->
        <!-- Middle Column -->
        <div class="one_half">
            <!-- ################################################################################################ -->
            <h2>Noticias &amp; Eventos</h2>
            <ul class="nospace listing">
                @foreach($post as $item)
                    <li class="clear">
                        <div class="imgl borderedbox"><img src="{{url('media/posts/'.$item->imagen)}}" alt=""></div>
                        <p class="nospace btmspace-15"><a href="{{url('publicacion/'.$item->id)}}">{{$item->titulo}}</a>
                        </p>
                        <article id="newsContent" class="slide">{!! nl2br($item->texto) !!}</article>
                    </li>
                @endforeach
                <?php echo $post->render(); ?>
            </ul>
            <!--<p class="right"><a href="#">Ver las últimas noticias y eventos &raquo;</a></p>-->
            <!-- ################################################################################################ -->
        </div>
        <!-- / Middle Column -->
        <!-- Right Column -->
        <div class="one_quarter sidebar">
            <!-- ################################################################################################ -->
            <div class="sdb_holder">
                <h6>Visita Virtual</h6>
                <div class="mediacontainer">
                    <iframe src="https://www.youtube.com/embed/563lnCF_71s" frameborder="0" allowfullscreen></iframe>
                    <p><a href="#">Encuentra más videos en nuestro canal de Youtube &raquo;</a></p>
                </div>
            </div>
            <div class="sdb_holder">
                <h6>Información sobre Cursos</h6>
                <ul class="nospace quickinfo">
                    @foreach($curso as $item)
                        <li class="clear"><a href="{{url('/curso/'.$item->id)}}"><img
                                        src="{{asset('/media/cursos/logos/'.$item->logo)}}"
                                        alt=""> {{$item->nombre}}</a></li>
                    @endforeach
                    <li class="clear"><a href="{{url('/cursos')}}"><img src="{{asset('/images/course.jpg')}}" alt="">
                            Ver más Cursos</a></li>
                </ul>
            </div>
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
        <!-- / Right Column -->
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
    <!-- ################################################################################################ -->
    <!-- ################################################################################################ -->
    <!-- / main body -->
    <div class="clear"></div>
@endsection
