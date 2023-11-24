<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Users;
use Illuminate\Http\Request;
class UsersController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return Users::all();
    }
    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        $request->validate([
            'usuario'           => 'required|string',
            'primerNombre'       => 'required|string',
            'segundoNombre'      => 'required|string',
            'primerApellido'     => 'required|string',
            'segundoApellido'    => 'required|string',
            'idDepartamento'     => 'required|string',
            'idCargo'            => 'required|string'
        ]);

        try {
            $user = Users::create($request->all());
            return response()->json($user, 200);
        } catch (\Throwable $th) {
            return response()->json([ 'error' => $th->getMessage()], 500);
       }
    }
    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        try {
            $user=Users::find($id);
            $user->update($request->all());
            return response()->json($user, 200);
        } catch (\Throwable $th) {
                return response()->json([ 'error' => $th->getMessage()], 500);
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        try {
            $user = Users::destroy($id);
            return response()->json($user, 200);
        } catch (\Throwable $th) {
                return response()->json([ 'error' => $th->getMessage()], 500);
        }
    }
}
