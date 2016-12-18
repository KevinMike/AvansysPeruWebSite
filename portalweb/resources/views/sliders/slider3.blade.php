<form action="{{url('/home/slider3')}}" method="post" enctype="multipart/form-data" class="form-horizontal" role="form">
    <input type="hidden" name="_token" value="{{ csrf_token() }}">
    <div class="form-group">
        <label class="col-md-4 control-label" for="nombre">Nombre del Slider</label>
        <div class="col-md-6">
            <input type="text" name="nombre" class="form-control" required>
        </div>
    </div>
    <div class="form-group">
        <label class="col-md-4 control-label" for="descripcion">Descripción</label>
        <div class="col-md-6">
            <textarea type="text" name="descripcion" class="form-control" required></textarea>
        </div>
    </div>
    <div class="form-group">
        <label class="col-md-4 control-label" for="imagen">Imagen</label>
        <div class="col-md-6">
            <input type="file" name="imagen" accept="image/*" required>
        </div>
    </div>
    <div class="form-group">
        <div class="col-md-6 col-md-offset-4">
            <input type="submit" value="Registrar" class="btn btn-success">
            <input type="reset" value="Limpiar" class="btn btn-default">
        </div>
    </div>
</form>