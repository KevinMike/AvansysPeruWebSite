<!DOCTYPE html>
<html>
<head>
    <title>Avansys - Perú | Centro de Capacitación</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <link href="{{asset('css/layout.css')}}" rel="stylesheet" type="text/css" media="all">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
</head>
<body id="top">
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<div class="wrapper row0">
    <div id="topbar" class="clear">
        <!-- ################################################################################################ -->
        <nav>
            <ul>
                <li><a href="{{asset('/')}}">Inicio</a></li>
                <li><a href="{{url('/contacto')}}">Contáctanos</a></li>
                <li><a href="http://www.avansysperu.com/aula/">Aula Virtual</a></li>
            </ul>
        </nav>
        <!-- ################################################################################################ -->
    </div>
</div>
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<div class="wrapper row1">
    <header id="header" class="clear">
        <!-- ################################################################################################ -->
        <div id="logo" class="fl_left">
            <a href="#"> <img src="{{asset('/images/Logo.png')}}"></a>
            <p><center>¡...Capacitate al más alto Nivel...!</center></p>
        </div>
        <!-- <h1><strong><a href="index.html">AVANSYS - PERÚ</a></strong></h1>
         <p>Centro de Capacitación en Informática Empresarial</p>
       </div>-->
        <!-- ################################################################################################ -->
    </header>
</div>
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<div class="wrapper row2">
    <div class="rounded">
        @yield('nav')
    </div>
</div>
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<div class="wrapper">
    <div id="slider">
        <div id="slide-wrapper" class="rounded clear">
            <!-- ################################################################################################ -->
            <figure id="slide-1"><a class="view" href="#"><img src="{{isset($sliders[0]) ? asset('/media/sliders/'.$sliders[0]->imagen) : '#'}}" alt=""></a>
                <figcaption>
                    <h2>{{isset($sliders[0]) ? $sliders[0]->nombre : ''}}</h2>
                    <p>{{isset($sliders[0]) ? $sliders[0]->descripcion : ''}}</p>
                    <!--<p class="right"><a href="#">Ver Informacion Completa &raquo;</a></p>-->
                </figcaption>
            </figure>
            <figure id="slide-2"><a class="view" href="#"><img src="{{isset($sliders[1]) ? asset('/media/sliders/'.$sliders[1]->imagen) : '#'}}" alt=""></a>
                <figcaption>
                    <h2>{{isset($sliders[1]) ? $sliders[1]->nombre : ''}}</h2>
                    <p>{{isset($sliders[1]) ? $sliders[1]->descripcion : ''}}</p>
                </figcaption>
            </figure>
            <figure id="slide-3"><a class="view" href="#"><img src="{{isset($sliders[2]) ? asset('/media/sliders/'.$sliders[2]->imagen) : '#'}}" alt=""></a>
                <figcaption>
                    <h2>{{isset($sliders[2]) ? $sliders[2]->nombre : ''}}</h2>
                    <p>{{isset($sliders[2]) ? $sliders[2]->descripcion : ''}}</p>
                </figcaption>
            </figure>
            <figure id="slide-4"><a class="view" href="#"><img src="{{isset($sliders[3]) ? asset('/media/sliders/'.$sliders[3]->imagen) : '#'}}" alt=""></a>
                <figcaption>
                    <h2>{{isset($sliders[3]) ? $sliders[3]->nombre : ''}}</h2>
                    <p>{{isset($sliders[3]) ? $sliders[3]->descripcion : ''}}</p>
                </figcaption>
            </figure>
            <figure id="slide-5"><a class="view" href="#"><img src="{{isset($sliders[4]) ? asset('/media/sliders/'.$sliders[4]->imagen) : '#'}}" alt=""></a>
                <figcaption>
                    <h2>{{isset($sliders[4]) ? $sliders[4]->nombre : ''}}</h2>
                    <p>{{isset($sliders[4]) ? $sliders[4]->descripcion : ''}}</p>
                </figcaption>
            </figure>
            <!-- ################################################################################################ -->
            <ul id="slide-tabs">
                <li><a href="#slide-1">{{isset($sliders[0]) ? $sliders[0]->nombre : ''}}</a></li>
                <li><a href="#slide-2">{{isset($sliders[1]) ? $sliders[1]->nombre : ''}}</a></li>
                <li><a href="#slide-3">{{isset($sliders[2]) ? $sliders[2]->nombre : ''}}</a></li>
                <li><a href="#slide-4">{{isset($sliders[3]) ? $sliders[3]->nombre : ''}}</a></li>
                <li><a href="#slide-5">{{isset($sliders[4]) ? $sliders[4]->nombre : ''}}</a></li>
            </ul>
            <!-- ################################################################################################ -->
        </div>
    </div>
</div>
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<div class="wrapper row3">
    <div class="rounded">
        <main class="container clear">
            <!-- main body -->
            <!-- ################################################################################################ -->
            @yield('content')
        </main>
    </div>
</div>
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<div class="wrapper row4">
    <div class="rounded">
        <footer id="footer" class="clear">
            <!-- ################################################################################################ -->
            <div class="one_third first">
                <figure class="center"><img class="btmspace-15" src="{{asset('/images/worldmap.png')}}" alt="">
                    <figcaption><a href="https://www.google.com/maps/@-18.0314513,-70.2512843,3a,15y/data=!3m6!1e1!3m4!1smC041MgKAVJgfq5EKsOHVg!2e0!7i13312!8i6656">Encuentranos con Google Maps &raquo;</a></figcaption>
                </figure>
            </div>
            <div class="one_third">
                <address>
                    Distrito Gregorio Albarracín <br>
                    Asoc. Las Viñas Mz “B” Lote 4 <br>
                    Tacna/Perú <br>
                    <br>
                    Referencia: <br>
                    A una cuadra y media de SENASA, antes de llegar al mercado CENEPA <br>
                </address>
            </div>
            <div class="one_third">
                <p class="nospace btmspace-10">Mantente informado de lo que esta aconteciendo, siguenos en nuestras redes sociales.</p>
                <ul class="faico clear">
                    <li><a class="faicon-twitter" href="#"><i class="fa fa-twitter"></i></a></li>
                    <li><a class="faicon-linkedin" href="#"><i class="fa fa-linkedin"></i></a></li>
                    <li><a class="faicon-facebook" href="#"><i class="fa fa-facebook"></i></a></li>
                    <li><a class="faicon-flickr" href="#"><i class="fa fa-flickr"></i></a></li>
                    <li><a class="faicon-rss" href="#"><i class="fa fa-rss"></i></a></li>
                </ul>

            </div>
            <!-- ################################################################################################ -->
        </footer>
    </div>
</div>
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<div class="wrapper row5">
    <div id="copyright" class="clear">
        <!-- ################################################################################################ -->
        <p class="fl_left">Copyright &copy; 2016 - Todos los derechos reservados - <a href="#">Avansys Perú</a></p>
        <p class="fl_right">Desarrollado por <a href="https://www.linkedin.com/in/kevin-mike-herrera-vega-0330b497" target="_blank">Kevin Mike Herrera Vega</a>, Template by <a target="_blank" href="http://www.os-templates.com/" title="Free Website Templates">OS Templates</a></p>
        <!-- ################################################################################################ -->
    </div>
</div>
<!-- JAVASCRIPTS -->
<script src="{{asset('js/jquery.min.js')}}"></script>
<script src="{{asset('js/layout.js')}}"></script>
<script src="{{asset('js/jquery.fitvids.min.js')}}"></script>
<script src="{{asset('js/jquery.mobilemenu.js')}}"></script>
<script src="{{asset('js/tabslet/jquery.tabslet.min.js')}}"></script>
<script src="{{asset('js/nivo-lightbox/nivo-lightbox.min.js')}}"></script>
<script src="{{asset('js/readmore.min.js')}}"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
<script src="{{asset('js/layout.js')}}"></script>
@yield('js')
</body>
</html>