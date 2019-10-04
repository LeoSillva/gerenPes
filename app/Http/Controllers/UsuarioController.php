<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Usuario;

class UsuarioController extends Controller
{
    //lista os dados na table do index
    public function index()
    {
        $usuarios = Usuario::all();

        return view('index',['usuarios'=> $usuarios]);
    }

    //salvar dados
    public function salvar(Request $request)
    {
        try
        {
            $usuario = Usuario::findOrNew($request->id_usuario);
            $usuario->setNome($request->nome);
            $usuario->setEmail($request->email);
            $usuario->save();

            return redirect()->route('index');
        }
        catch(\Exception $ex)
        {
            return dd($ex);
        }
    }

    //Deletar dados
    public function deletar(Request $request, $id)
    {
        try
        {
            
            $usuario = Usuario::find($id);
            $usuario->delete();

            return redirect()->route('index');
        }
        catch(\Exception $ex)
        {
            return dd($ex);
        }
    }

    public function editar($id)
    {
        $usuario = Usuario::find($id);

        return view('editarUsuario',['usuario'=> $usuario]);        
    }
}
