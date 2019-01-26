<?php

namespace App\Http\Controllers;

use App\Usuario;
use Validator;
use Illuminate\Http\Request;

class UsuarioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return response()->json(Usuario::all());
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $validador = Validator::make($request->all(), [
            'nombre' => 'required|max:255',
            'apellido' => 'required|max:255',
            'email' => 'required|unique:usuarios|max:255',
            'usuario' => 'required|unique:usuarios|max:255'
        ]);

        if ($validador->fails()) {
            return response()->json([
                'success' => false,
                'message' => 'Error de validación'
            ]);
        }

        $usuario = new Usuario($request->all());

        if (!$usuario->save()) {
            return response()->json([
                'success' => false,
                'message' => 'Error al guardar los datos'
            ]);
        }

        return response()->json([
            'success' => true
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $usuario = Usuario::findOrFail($id);
        return response()->json($usuario);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {

        $validador = Validator::make($request->all(), [
            'nombre' => 'required|max:255',
            'apellido' => 'required|max:255',
            'email' => 'required|max:255',
            'usuario' => 'required|max:255'
        ]);

        if ($validador->fails()) {
            return $validador->errors();
        }

        $usuario = Usuario::findOrFail($id);
        $usuario->fill($request->all());

        if (!$usuario->save()) {
            return response()->json([
                'success' => false,
                'message' => 'Error al guardar los datos'
            ]);
        }

        return response()->json([
            'success' => true
        ]);


    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        if (!Usuario::destroy($id)) {
            return response()->json([
                'success' => false,
                'message' => 'Error al borrar la fila'
            ]);
        }

        return response()->json([
            'success' => true
        ]);
    }
}
