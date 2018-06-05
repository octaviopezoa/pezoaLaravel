<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Noticia;

use Storage;

class Noticias extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //

        //dd($request->contenido);
        $this->validate($request,[
            'titulo' => 'required',
            'contenido' =>'required'
        ]);

        $noticia = new Noticia();

        $noticia->titulo = $request->titulo;
        $noticia->contenido = $request->contenido;

        $img = $request->file('rutaImagen');
        $file_route = time().'_'.$img->getClientOriginalName();

        Storage::disk('imagenes')->put($file_route, file_get_contents($img->getRealPath()));

        $noticia->rutaImagen = $file_route;

        if ($noticia->save()) {
            return back()->with('exito','Datos guardados');
        } else {
            return back()->with('fracaso','Error al guardar, pruebe nuevamente.');;
        }
        
        
        
        
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
