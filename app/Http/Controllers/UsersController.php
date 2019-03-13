<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Sinais;

class UsersController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function sendView()
    {
        return view('user.sendvideo');
    }

    public function sendvideo(Request $request)
    {
        $this->validate($request,[
            'descricao' => 'required',
            'video' => 'mimes:mp4,avi,mov,ogg|max:20000'
        ]);

    	if ($request->hasFile('video')) {

            $path = $request->file('video')->store('sinais_users','public');

            Sinais::create(["user_id" => $request->user()->id, "descricao" => $request->descricao, "path" => $path]);

            \Session::flash('mensagem_sucesso', 'Vídeo Enviado.');

            return back();
        }
    }
}
