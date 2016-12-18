{!!Form::open(array('url' => '/home/updateCourse','class'=>"form-horizontal", 'role'=>"form",'files' => true)) !!}
{!! Form::text('id',$curso->id,['hidden'=>true]) !!}
<div class="form-group">
    {!! Form::label('nombre','Nombre del Curso',array('class'=>"col-md-4 control-label")) !!}
    <div class="col-md-6">
        {!! Form::text('nombre',$curso->nombre,array('class'=>"form-control",'required'=>true,'maxlength'=>30)) !!}
    </div>
</div>
<div class="form-group">
    {!! Form::label('descripcion','Descripción',array('class'=>"col-md-4 control-label")) !!}
    <div class="col-md-6">
        {!! Form::textarea('descripcion',$curso->descripcion,array('class'=>"form-control",'required'=>true,'id'=>'editor')) !!}
    </div>
</div>
<div class="form-group">
    {!! Form::label('frecuencia','Frecuencia',array('class'=>"col-md-4 control-label")) !!}
    <div class="col-md-6">
        {!! Form::text('frecuencia',$curso->frecuencia,array('class'=>"form-control",'required'=>true,'maxlength'=>100)) !!}
    </div>
</div>
<div class="form-group">
    {!! Form::label('horario','Horas',array('class'=>"col-md-4 control-label")) !!}
    <div class="col-md-6">
        {!! Form::text('horario',$curso->horario,array('class'=>"form-control",'required'=>true,'maxlength'=>100)) !!}
    </div>
</div>
<div class="form-group">
    {!! Form::label('fecha_inicio','Fecha de Inicio',array('class'=>"col-md-4 control-label")) !!}
    <div class="col-md-6">
        {!! Form::text('fecha_inicio', date('d-m-Y', strtotime($curso->fecha_inicio)) ,array('class'=>"form-control",'required'=>true,'id'=>'datepicker')) !!}
    </div>
</div>
<div class="form-group">
    {!! Form::label('costo','Costo',array('class'=>"col-md-4 control-label")) !!}
    <div class="col-md-6">
        {!! Form::text('costo',$curso->costo,array('class'=>"form-control",'required'=>true)) !!}
    </div>
</div>

<div class="form-group">
    {!! Form::label('duracion','Duración',array('class'=>"col-md-4 control-label")) !!}
    <div class="col-md-6">
        {!! Form::text('duracion',$curso->duracion,array('class'=>"form-control",'required'=>true,'maxlength'=>50)) !!}
    </div>
</div>
<div class="form-group">
    {!! Form::label('tipo','Tipo',array('class'=>"col-md-4 control-label")) !!}
    <div class="col-md-6">
        <select name="tipo" class="form-control">
            <option value="0">Curso ordinario</option>
            <option value="1">Especialidad</option>
        </select>
    </div>
</div>
<div class="form-group">
    {!! Form::label('imagen_curso', 'Imagen del Curso',array('class'=>"col-md-4 control-label")) !!}
    <div class="col-md-6">
        {!! Form::file('imagen_curso',array('maxlenght'=>100,'accept'=>"image/*")) !!}
    </div>
</div>
<div class="form-group">
    {!! Form::label('logo_curso', 'Logo del Curso',array('class'=>"col-md-4 control-label")) !!}
    <div class="col-md-6">
        {!! Form::file('logo_curso',array('maxlenght'=>100,'accept'=>"image/*")) !!}
    </div>
</div>
<div class="form-group">
    <div class="col-md-6 col-md-offset-4">
        {!! Form::submit('Registrar Curso',['class' => 'btn btn-primary']) !!}
        <input type="button" value="Atras" class="btn btn-warning" id="atras"/>
    </div>
</div>
{!!Form::close()!!}