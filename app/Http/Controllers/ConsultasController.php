<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Consulta;
use DB;
use Illuminate\Support\Facades\Validator;
class ConsultasController extends Controller
{
    public function guardar_consulta(Request $request){
        $ip = $request->ip();

        $messages = [
            'required' => 'El campo :attribute es obligatorio.',
        ];
    
        // Validar los datos del formulario con los mensajes personalizados
        $validator = Validator::make($request->all(), [
            'nombres' => 'required',
            'celular' => 'required',
            'consulta' => 'required',
        ], $messages);

        // Comprobar si hay errores de validación
        if ($validator->fails()) {
            return back()->with('error', 'Verificar campos');
        }

        // Si la validación es exitosa, guardar los datos en la base de datos
        $consulta = new Consulta();
        $consulta->Nombres = $request->nombres;
        $consulta->Telefono = $request->celular;
        $consulta->Caso = $request->consulta;
        $consulta->ip = $ip; // Guardar la dirección IP aquí
        $consulta->save();

        return back()->with('success', 'todo ok');
    }

    public function Carga_Blog(){
        $items=DB::table("blogs")->get();
        foreach ($items as $item) {
            $item->Portada = asset('storage/' . str_replace('\\', '/', $item->Portada));
        }
        return view("Blog",compact("items"));
    }
    public function Carga_Blog_unico($nombre){
        $item=DB::table("blogs")->where("Titulo","=",$nombre)->first();
        $item->Imagen = asset('storage/' . str_replace('\\', '/', $item->Imagen));
        return view("Unico",compact("item"));

    }
}
