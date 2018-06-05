@if (session()->has('exito'))
    <div class="alert alert-success" role="alert">
        {{session('exito')}}
    </div>
@else
    @if (session()->has('fracaso'))
        <div class="alert alert-danger" role="alert">
            {{session('fracaso')}}
        </div>
    @endif
@endif

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

        @if ($errors->has('rutaImagen'))
            <span class="help-block">
                <strong>{{ $errors->first('rutaImagen') }}</strong>
            </span>
        @endif
    </div>

    <button type="submit" class="btn btn-primary">Guardar</button>

</form>