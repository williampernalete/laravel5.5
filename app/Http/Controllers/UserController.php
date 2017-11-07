<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    //
    public function index()
    {
        $users=[
            'joel',
            'ellie',
            'tess'
        ];
        return view('users', [
            'users'=>$users,
            'title'=>'Listados de Usuarios'
        ]);

    }

    public function show($id)
    {
        return "mostrando detalles del usuario: {$id}" ;
    }

    public function create()
    {
        return 'Crear usuario nuevo' ;
    }

}
