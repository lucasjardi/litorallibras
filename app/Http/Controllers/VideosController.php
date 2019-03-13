<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Video;
use App\Glossario;

class VideosController extends Controller
{
    public function __construct()
    {
    	$this->middleware('auth');
    }

    public function index()
    {
    	$videos = Video::with('glossario')->get();
    	return view('admin.videos.index')->with(['videos' => $videos]);
    }

    public function formulario()
    {
    	$glossario = Glossario::all();

        $glossarioCategorias = array();
        foreach ($glossario as $aux){
            $glossarioCategorias[ $aux->id ] = $aux->categoria;
        }

    	return view('admin.videos.formulario')->with(['categorias' => $glossarioCategorias]);
    }


    public function store(Request $request)
    {
    	$this->validate($request,[
            // 'categoria' => ['required'],
            'descricao' => ['required'],
            'youtube_id' => ['required','regex:/(?:youtube\.com\/(?:[^\/]+\/.+\/|(?:v|e(?:mbed)?)\/|.*[?&]v=)|youtu\.be\/)([^"&?\/ ]{11})/i']
        ]);

        preg_match('%(?:youtube(?:-nocookie)?\.com/(?:[^/]+/.+/|(?:v|e(?:mbed)?)/|.*[?&]v=)|youtu\.be/)([^"&?/ ]{11})%i', $request->youtube_id, $match);
        
        $youtube_id = $match[1];
		
		Video::create($request->except('youtube_id') + ['youtube_id' => $youtube_id]);

        \Session::flash('mensagem_sucesso','Vídeo Salvo!');

        return \Redirect::to('/admin/videos');
    }

    public function editar(Video $video, Glossario $glossario)
    {
    	$glossario = Glossario::all();

        $glossarioCategorias = array();
        foreach ($glossario as $aux){
            $glossarioCategorias[ $aux->id ] = $aux->categoria;
        }

    	return view('admin.videos.formulario')->with(['video' => $video, 'categorias' => $glossarioCategorias]);
    }

    public function update(Video $video,Request $request)
    {

    	$this->validate($request,[
            'youtube_id' => ['required','regex:/(?:youtube\.com\/(?:[^\/]+\/.+\/|(?:v|e(?:mbed)?)\/|.*[?&]v=)|youtu\.be\/)([^"&?\/ ]{11})/i']
        ]);

        preg_match('%(?:youtube(?:-nocookie)?\.com/(?:[^/]+/.+/|(?:v|e(?:mbed)?)/|.*[?&]v=)|youtu\.be/)([^"&?/ ]{11})%i', $request->youtube_id, $match);
        
        $youtube_id = $match[1];


		$video->update($request->except('youtube_id') + ['youtube_id' => $youtube_id]);

        \Session::flash('mensagem_sucesso','Vìdeo Atualizado!');

        return \Redirect::to('/admin/videos');

    }

    public function delete(Video $video)
    {
    	$video->delete();

        \Session::flash('mensagem_sucesso','Vídeo Deletado!');

        return \Redirect::to('/admin/videos');
    }
}
