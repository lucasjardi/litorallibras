<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Glossario;
use App\Video;

class GlossarioController extends Controller
{
    // public function index()
    // {
    // 	$glossario = Glossario::all();

    //     if(! $glossario->isEmpty() )
    //         return view('glossario.index')->with(['glossario' => $glossario]);
    //     else
    //         return view('errors.nothingyet');
    // }


    public function getItemByCategoria($glossario='')
    {
    	$categoria = str_replace('-', ' ', $glossario);

    	$item = Glossario::where('categoria',$categoria)->with('videos')->first();

    	if(!is_null($item))
            return view('glossario.item')->with(['item' => $item]);
        else
            return view('errors.notfound');
    }

    public function getVideo(Video $video)
    {
        return view('glossario.video')->with(['video' => $video]);
    }

    //AUTH

    public function glossario()
    {
        $glossario = Glossario::all();

        return view('admin.glossario.index')->with(['glossario' => $glossario]);
    }

    public function formularioGlossario()
    {
        return view('admin.glossario.formulario');
    }

    public function editarGlossario(Glossario $glossario)
    {
        return view('admin.glossario.formulario')->with(['glossario' => $glossario]);
    }

    public function storeGlossario(Request $request)
    {
         $request->validate([
            'categoria' => ['required'],
            'descricao' => ['required']
        ]);

        Glossario::create($request->all());

        \Session::flash('mensagem_sucesso','Item de Glossário Salvo!');

        return \Redirect::to('/admin/glossario');
    }

    public function updateGlossario(Glossario $glossario,Request $request)
    {
        $request->validate([
            'categoria' => ['required'],
            'descricao' => ['required']
        ]);
        
        $glossario->update($request->all());

        \Session::flash('mensagem_sucesso','Item de Glossário Atualizado!');

        return \Redirect::to('/admin/glossario');
    }

    public function deleteGlossario(Glossario $glossario)
    {
        $glossario->delete();

        \Session::flash('mensagem_sucesso','Item de Glossário Deletado!');

        return \Redirect::to('/admin/glossario');
    }
}
