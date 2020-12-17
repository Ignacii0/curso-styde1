<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UsersController extends Controller
{
    public function index()
    {
        $users = [
            'Juan',
            'Luis',
            'Victor',
            'Filippo',
            'Diego',

        ];

        return view('users',[
            
            'users' => $users
        ]);
    }

    public function show($id)
    {
        return "Mostrando detalle del usuario: {$id}";
    }

    public function create()
    {
        return 'Crear nuevo usuario';
    }
}

