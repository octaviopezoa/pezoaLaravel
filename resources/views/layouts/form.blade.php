<form role="form" method="POST" action="{{url('noticias')}}" enctype="multipart/form-data">

    {{ csrf_field() }}

    <div class="form-group">
        <label for="titulo">Título</label>
        <input type="text" class="form-control" name="titulo" placeholder="Titulo">

        @if ($errors->has('titulo'))
            <span class="help-block">
                <strong>{{ $errors->first('titulo') }}</strong>
            </span>
        @endif
    </div>

    <div class="form-group">
        <label for="contenido">Contenido</label>
        <textarea type="text" class="form-control" name="contenido" placeholder="Contenido"></textarea>

        @if ($errors->has('contenido'))
            <span class="help-block">
                <strong>{{ $errors->first('contenido') }}</strong>
            </span>
        @endif
    </div>

    <div class="form-group">
        <label for="rutaImagen">Imagen</label>
        <input type="file" class="" name="rutaImagen" placeholder="Suba imagen">
    </div>

    <button type="submit" class="btn btn-primary">Guardar</button>

</form>