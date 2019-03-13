<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Glossario;
use App\Sinais;
use Auth;

class AdminController extends Controller
{
    public function __construct()
    {
    	$this->middleware(['auth','checkifisadmin']);
    }

    public function index()
    {
        $sinais_users = Sinais::with('user')->orderBy('created_at',false)->get();
    	if ( Auth::user()->is_admin === 1 ) {
    		return view('admin.index')->with(["sinais" => $sinais_users]);
    	} else {
    		return view('user.sendvideo');
    	}
    	
    }
}
