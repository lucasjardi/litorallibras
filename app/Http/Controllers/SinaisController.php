<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Sinais;
use Illuminate\Support\Facades\Storage;

class SinaisController extends Controller
{
    public function getSinalVideo(Sinais $sinal, Request $request)
    {
    	return view('user.viewvideo')->with(["video" => $sinal]);
    }

    public function delete(Sinais $sinal)
    {        
        Storage::disk('public')->delete($sinal->path);

        $sinal->delete();

        \Session::flash('mensagem_sucesso','Apagado');

    	return redirect('/admin');
    }
}
