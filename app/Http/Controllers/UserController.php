<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        // dd('hello');
        // $user = new User();
        // $user->name = 'sheikh salah uddin';
        // $user->email = 'skuddin.ius@gmail.com';
        // $user->password = '1234';
        // $user->save();
        $user =  User::first();
        dd($user->name);
    }
}
