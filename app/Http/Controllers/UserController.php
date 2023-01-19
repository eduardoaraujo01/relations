<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{


    public function index(Request $r) {
        $users = User::all();
        return $users;
    }

    public function findOne(Request $r){
        $user = User::find($r->id);
        $user['addresses'] = $user->addresses;
        return $user;
    }
    public function insert(Request $r){
        // $user =  User::create(['name'=>'Jose', 'email'=> 'jose@hotmail.com', 'password'=> '1459']);
        // return $user;

        $rowData = $r->only(['name', 'email', 'password']);
       $user = User::create($rowData);
        return $user;
    }
}
