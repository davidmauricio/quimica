<?php

namespace App\Http\Controllers;


use Caffeinated\Shinobi\Models\Role;
use Caffeinated\Shinobi\Models\Permission;
use Illuminate\Http\Request;

class RoleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $roles =Role::paginate();
        return view('roles.index', compact('roles'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $permissions=Permission::get();
        return view('roles.create',compact('permissions'));
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Asignatura  $asignatura
     * @return \Illuminate\Http\Response
     */
    public function edit(Role $role)
    {
         $permissions=Permission::get();
        return view('roles.edit', compact('role','permissions'));
    }



    public function store(Request $request)
    {
        $role =Role::create($request->all());

         $role->permissions()->sync($request->get('permissions'));//actualizar permiso

        return redirect()->route('roles.edit', $role->id)->with('info','Rol guardado con exito');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */

    /**
     * Display the specified resource.
     *
     * @param  \App\Asignatura  $asignatura
     * @return \Illuminate\Http\Response
     */
    public function show(Role $role)
    {
       
        return view('roles.show', compact('role'));
    }

    
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Asignatura  $asignatura
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Role $role)
    {
        //actualizar el usuario y roles
        //Esta linea actualiza el usuario
        $role->update($request->all());

        //actualizar roles
        $role->permissions()->sync($request->get('permissions')); //El usuario tine varios roles sincronizalo con lo que le estamos pasando en ese array

        return redirect()->route('roles.edit', $role->id)->with('info','Rol actualizado con éxito');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Asignatura  $asignatura
     * @return \Illuminate\Http\Response
     */
    public function destroy(Role $role)
    {
        $role->delete();

        return back()->with('info','Rol eliminado con éxito');
    }
}
