@extends('app')
@section('content')
    <script type="text/javascript">
        $(function () {
            initSample();
            $('#atras').click(function () {
                parent.history.back();
                return false;
            });
        });
    </script>
    <div class="container">
        <h1><b><i class="fa fa-file-text"></i> PUBLICACIONES</b></h1>
        <br>
        <h3>EDITAR</h3>
        @include('posts.update')
    </div>
@endsection