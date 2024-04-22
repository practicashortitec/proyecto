<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Usuario;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;
use JWTAuth;
use Illuminate\Support\Str;
use Haruncpi\LaravelIdGenerator\IdGenerator;
//use Tymon\JWTAuth\Facades\JWTAuth;
//use Tymon\JWTAuth\JWTAuth;


class UsuariosController extends Controller
{

    public function store(Request $request){
        $usuario = new Usuario;

        //$usuario->id_usuario = $request->id_usuario;
        $usuario->username = $request->username;
        $usuario->email = $request->email;
        $usuario->password = bcrypt($request->password);
        $usuario->token = $request->_token;
        $usuario->save();

        return response()->json(["message" => "Usuario Added"],200);

    }

    public function insert(){
        $usuario = new Usuario;

        $usuario->username= Input::get('username');
        $usuario->email= Input::get('email');
        $usuario->password= Hash::make(Input::get('password'));


        $usuario->token = Str::random(60);
  

        $usuario->save();

        return Redirect::back();
    }

    public function index(){
        $usuario = Usuario::all();
        return response()->json($usuario);
    }

    public function show($id){
        $usuario = Usuario::find($id);
        if(!empty($usuario)){
            return response()->json($usuario);
        } else {
            return response()->json(["message"=> "Usuario not found"],404);
        }
    }

    public function update(Request $request, $id){  
        if(Usuario::where("id", $id)->exists()) {
            $usuario = Usuario::find($id);
            $usuario->id_usuario = is_null($request->id_usuario) ? $usuario->id_usuario : $request->id_usuario;
            $usuario->username = is_null($request->username) ? $usuario->username : $request->username;
            $usuario->email = is_null($request->email) ? $usuario->email : $request->email; 
            $usuario->password = is_null($request->password) ? $usuario->password : $request->password;
            $usuario->token = is_null($request->token) ? $usuario->token : $request->token;
        }
    }

    public function destroy($id){
        if(Usuario::where("id", $id)->exists()) {
            $usuario = Usuario::find($id);
            $usuario->delete();
            return response()->json(["message"=> "usuario deleted"],200);
        } else {
            return response()->json(["message"=> "usuario not found"],404);
        }
    }
}