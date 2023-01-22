<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

class C1 extends Controller
{
    //
    public function getdata(){
        $users = DB::table('users')->get();
        $total = count($users);
        return view('showdata' , ['data' => $users , 'total' => $total] );
    }
    public function newUser(Request $req){
        $id = $req->input('id');
        $name = $req->input('name');
        $email = $req->input('email');

        DB::insert('insert into users (id, name,email) values (?, ?, ?)', [$id, $name,$email]);
        return redirect('/data');
    }

    public function findUser($id){
        $user = DB::select('select * from users where id = ? ' , [$id]);
        return view('edit' , ['user' =>$user]);
    }

    public function editUser(Request $req){
        $id = $req->input('id');
        $name = $req->input('name');
        $email = $req->input('email');
        $i = DB::update('update users set name = ? , email = ? where id = ?' ,[$name,$email,$id] );
        return redirect('/data');
        

    }

    public function deleteUser(){

    }
    

}
