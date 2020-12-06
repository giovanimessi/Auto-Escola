<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Usuario;


class UsuarioController extends Controller
{
    //
    public function login(Request $request){
        $usuario = $request->usuario;
        $senha = $request->senha;

        $usuario = Usuario::where('usuario', '=',
         $usuario)->where('senha', '=', $senha)->first();

         //verifica se e indefinido @
         if(@$usuario->id != null)
         @session_start();
         $_SESSION['id_usuario'] = $usuario->id;
         $_SESSION['usuario'] = $usuario->usuario;
         $_SESSION['senha'] = $usuario->senha;
         $_SESSION['cpf'] = $usuario->cpf;
         $_SESSION['nivel'] = $usuario->nivel;

         //redirecionamento
         if($_SESSION['nivel_usuario'] == 'admin'){
             return view('');
         }else{
             $usuario = Usuario::orderby('id', 'desc')->paginate();
             return view();
         }








       


    }
}
