<br>
<div class="container-fluid">
    @if (isset($noticias))
        <div class="row">
            @foreach($noticias as $n)
                <div class="col-2">
                    <img src="./imagenes/{{$n->rutaImagen}}" alt="Sin imagen" width="20%">
                </div>
                <div class="col-3">
                    <h5><b>{{$n->titulo}}</b></h5>
                </div>
                <div class="col-3">
                    <p class="card-text">{{$n->contenido}}</p>
                </div>
            @endforeach
        </div>
    @endif
</div>