<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\QuemSomos;

class QuemSomosController extends Controller
{
    public function index()
    {
    	$quemsomos = QuemSomos::first();
    	return view('admin.quemsomos.index')->with(['quemsomos' => $quemsomos]);
    }

    public function store(Request $request)
    {
            
        $request->validate([
            'titulo' => ['required'],
            'texto' => ['required'],
            'titulo_youtube_id' => ['nullable','regex:/(?:youtube\.com\/(?:[^\/]+\/.+\/|(?:v|e(?:mbed)?)\/|.*[?&]v=)|youtu\.be\/)([^"&?\/ ]{11})/i']
        ]);

        preg_match('%(?:youtube(?:-nocookie)?\.com/(?:[^/]+/.+/|(?:v|e(?:mbed)?)/|.*[?&]v=)|youtu\.be/)([^"&?/ ]{11})%i', $request->titulo_youtube_id, $match);

        $youtube_id = null;
        if(!empty($match))
            $youtube_id = $match[1];

        QuemSomos::create($request->except('titulo_youtube_id') + ["titulo_youtube_id" => $youtube_id]);

        \Session::flash('mensagem_sucesso','Atualizado');

        return back();
    }

    public function update(Request $request)
    {
        $request->validate([
            'titulo' => ['required'],
            'texto' => ['required'],
            'titulo_youtube_id' => ['nullable','regex:/(?:youtube\.com\/(?:[^\/]+\/.+\/|(?:v|e(?:mbed)?)\/|.*[?&]v=)|youtu\.be\/)([^"&?\/ ]{11})/i']
        ]);

        preg_match('%(?:youtube(?:-nocookie)?\.com/(?:[^/]+/.+/|(?:v|e(?:mbed)?)/|.*[?&]v=)|youtu\.be/)([^"&?/ ]{11})%i', $request->titulo_youtube_id, $match);

        $youtube_id = null;
        if(!empty($match))
            $youtube_id = $match[1];

        $quemsomos = QuemSomos::first();
    	$quemsomos->update($request->except('titulo_youtube_id') + ["titulo_youtube_id" => $youtube_id]);

    	\Session::flash('mensagem_sucesso','Atualizado');

    	return back();
    }
}
