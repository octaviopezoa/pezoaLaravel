<form role="form" method="POST" action="{{url('noticias')}}" >

    {{ csrf_field() }}

    <div class="form-group">
        <label for="titulo">Título</label>
        <input type="text" class="form-control" name="titulo" placeholder="Titulo">
    </div>

    <div class="form-group">
        <label for="contenido">Contenido</label>
        <textarea type="text" class="form-control" name="contenido" placeholder="Contenido"></textarea>
    </div>

    <div class="form-group">
        <label for="rutaImagen">Imagen</label>
        <input type="file" class="" name="rutaImagen" placeholder="Suba imagen">
    </div>

    <button type="submit" class="btn btn-primary">Guardar</button>

    </form>