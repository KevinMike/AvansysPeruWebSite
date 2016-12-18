{!! Form::open(["url" => "/home/updatePost",'class'=>"form-horizontal", 'role'=>"form",'files' => true]) !!}
{!! Form::text('id',$post->id,['hidden'=>true]) !!}
<div class="form-group">
    {!! Form::label('titulo','Titulo',array('class'=>"col-md-4 control-label")) !!}
    <div class="col-md-6">
        {!! Form::text('titulo',$post->titulo,['class' => 'form-control','required' => true,"maxlenght" => '80','id' => 'titulo']) !!}
    </div>
</div>
<div class="form-group">
    {!! Form::label('texto','Contenido',array('class'=>"col-md-4 control-label")) !!}
    <div class="col-md-6">
        {!! Form::textarea('texto',$post->texto,['class' => 'form-control', 'required' => true,'id'=>'editor']) !!}
    </div>
</div>

<div class="form-group">
    {!! Form::label('imagen', 'Imagen',array('class'=>"col-md-4 control-label")) !!}
    <div class="col-md-6">
        {!! Form::file('imagen',array('maxlenght'=>100,'accept'=>"image/*")) !!}
    </div>
</div>
<div class="form-group">
    <div class="col-md-6 col-md-offset-4">
        {!! Form::submit('Registrar Publicación',['class' => 'btn btn-primary']) !!}
        <input type="button" value="Atras" class="btn btn-warning" id="atras"/>
    </div>
</div>
{!! Form::close() !!}