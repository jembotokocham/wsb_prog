<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;


class DbController extends Controller
{
    public function ShowUsers(){
        //return Db::select('select * from users');
        //return Db::table('users')->get();

        //return Db::table('users')
         //   ->select('name','email','created_at')
         //   ->get();

        //return Db::table('users')
          //->select('name','email','created_at')
          //  -> where('name','tomasz')
        //  ->get();
        $pass = Hash::make('Tajne123');
       return Db::table('users')
           ->insert([
               'name' => 'Maria',
               'email' => 'Maria@wp.pl',
               'password' => $pass,
                'created_at'=>now(),
               'updated_at'=>now(),

           ]);

    }
}
