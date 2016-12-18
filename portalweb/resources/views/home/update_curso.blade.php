@extends('app')
@section('content')
        <script>
            $(function() {
                $( "#datepicker" ).datepicker({ dateFormat: 'dd-mm-yy' });
                $('#atras').click(function(){
                    parent.history.back();
                    return false;
                });
            });
        </script>
		<div class="container">
            <h1><b><i class="fa fa-book"></i> CURSOS</b></h1>
            <br>
            <h3>Editar</h3>
                @include('courses.update')
	   </div>
@endsection