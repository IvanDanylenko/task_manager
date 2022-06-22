<?php

namespace App\Http\Controllers;

class UserController extends Controller
{
    public function register()
    {
        return 'User register';
    }

    public function login()
    {
        return 'User login';
    }

    public function show($id)
    {
        return 'User show ' . $id;

    }

    public function delete($id)
    {
        return 'User delete ' . $id;
    }
}
