<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Material;

class MateriaisController extends Controller
{

	// AUTH

	 public function getMateriais()
    {
    	$materiais = Material::all();
    	return view('admin.material.index')->with(['materiais' => $materiais]);
    }

    public function formulario()
    {
    	return view('admin.material.formulario');
    }


    public function store(Request $request)
    {
    	$request->validate([
            'titulo' => 'required',
            'texto' => 'required'
        ]);

		Material::create($request->all());

        \Session::flash('mensagem_sucesso','Material Salvo!');

        return \Redirect::to('/admin/material');
    }

    public function editar(Material $material)
    {

    	return view('admin.material.formulario')->with(['material' => $material]);
    }

    public function update(Material $material,Request $request)
    {
        $request->validate([
            'titulo' => 'required',
            'texto' => 'required'
        ]);
        
		$material->update($request->all());

        \Session::flash('mensagem_sucesso','Material Atualizado!');

        return \Redirect::to('/admin/material');

    }

    public function delete(Material $material)
    {
    	$material->delete();

        \Session::flash('mensagem_sucesso','Material Deletado!');

        return \Redirect::to('/admin/material');
    }
}
