<?php

namespace App\Http\Controllers;

use App\Image;
use Faker\Provider\DateTime;
use Illuminate\Http\Request;
use App\Http\Requests\NewRequest;
use App\News;

use Laracasts\Flash\Flash;

class NewsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $news = news::orderBy('id_noticia','DESC')->paginate(10);
        return view('admin.news.index')->with('news',$news);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.news.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(NewRequest $request)
    {


        $new = new News($request->all());
        $date = new \DateTime();
        $new->fecha_creacion = $date->format('Y-m-d H:i:s');
        $new->imagen_noticia;
        $file = $request->file($new->imagen_noticia);
        $new->estado=true;

        $new->rut='17.617.382-3';

        $new->save();

        Flash::success('La noticia  '.$new->titulo.'  ha sido creada exitosamente');
        return redirect()->route('news.index');
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
        $notice = News::find($id);
        return view('admin.news.edit')->with('news',$notice);

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
        $notice = News::find($id);
        $notice->fill($request->all());
        $notice->save();
        Flash::warning('La noticia '.$notice->titulo.'a sido modificada exitosamente');
        return redirect()->route('news.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $notice = News::find($id);
        $notice->delete();
        Flash::error('La noticia ' .$notice->titulo . ' a sido eliminada');
        return redirect()->route('news.index');
    }
}
