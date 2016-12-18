@extends('master')
@section('nav')
    <nav id="mainav" class="clear">
        <!-- ################################################################################################ -->
        <ul class="clear">
            <li><a href="{{url('/')}}">Inicio</a></li>
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
            <li class="active"><a href="{{url('/galeria')}}">Galeria de Imágenes</a></li>
        </ul>
        <!-- ################################################################################################ -->
    </nav>
@endsection
@section('content')
    <!-- main body -->
    <!-- ################################################################################################ -->
    <div id="gallery">
        <figure>
            <header class="heading">Galería Virtual</header>
            <ul class="nospace clear">
                <?php $i = 1; $row = 4;?>
                @foreach($fotos as $imagen)
                    <?php if ($i == 1 || ($i - 1) % $row == 0) {
                        echo '<li class="one_quarter">';
                    }else{
                        echo '<li class="one_quarter">';
                    } ?>
                    <a class="nlb" data-lightbox-gallery="gallery1" href="{{asset('media/galeria/'.$imagen->foto)}}" title="{{$imagen->descripcion}}"><img class="borderedbox" src="{{asset('media/galeria/'.$imagen->foto)}}" alt=""></a></li>
                @endforeach
            </ul>
            <figcaption>Conocenos más visitando nuestra galería de fotos.</figcaption>
            <nav class="pagination">
                <?php echo $fotos->render(); ?>
            </nav>
        </figure>
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