<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\QuemSomos;
use App\Glossario;
use App\Material;
use App\Video;
use App\LitoralLibras;

class HomeController extends Controller
{
    public function getQuemSomos()
    {
        $quemsomos = QuemSomos::first();
        if (! empty($quemsomos) )
           return view('quemsomos.index')->with(['quemsomos' => $quemsomos]);
        else
            return view('errors.nothingyet');
    }


    public function checkLoginUser()
    {
        if ( Auth::user()->is_admin === 1 ) {
            return view('admin.index');
        } else {
            return view('user.sendvideo');
        }
        
    }

    public function landingPage()
    {
        $litorallibras = LitoralLibras::first();

        if (! empty($litorallibras) )
           return view('landing')->with(['litorallibras' => $litorallibras]);
        else
            return view('errors.nothingyet');
    }

    public function getGlossario()
    {
        $glossario = Glossario::all();

        if(! $glossario->isEmpty() )
            return view('glossario.index')->with(['glossario' => $glossario]);
        else
            return view('errors.nothingyet');
    }


    public function getItemByCategoria($glossario='')
    {
        $categoria = str_replace('-', ' ', $glossario);

        $item = Glossario::where('categoria',$categoria)->with('videos')->first();

        if(!is_null($item))
            return view('glossario.item')->with(['item' => $item]);
        else
            return view('errors.notfound');
    }

    public function getMateriais()
    {
        $materiais = Material::all();

        if(! $materiais->isEmpty() )
            return view('material.index')->with(['materiais' => $materiais]);
        else
            return view('errors.nothingyet');
    }

    public function getMaterialByCategoria($material)
    {
        $titulo = str_replace('-', ' ', $material); //slugged

        $item = Material::where('titulo',$titulo)->first();

        if(!is_null($item))
            return view('material.item')->with(['item' => $item]);
        else
            return view('errors.notfound');
    }

    public function getVideo($videoId)
    {
        $video = Video::where('youtube_id',$videoId)->first();
        if($video)
            return view('glossario.video')->with(['video' => $video]);
        else
            return view('errors.notfound');
    }
}
