<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function  account(Request $req){
        //return $req->input();
        //return $req->path();
        //return $req->url();
        //return $req->method();
        //return $req->input('email');

        $req->validate([
            'email'=>'required | email',
            'lastName'=>'required|min:5|max:10'
        ],
        [
            'email.required'=>'Pole adres e-mail jest wymagane',
            'lastName.required'=>'Pole nazwisko jest wymagane',
            'lastName.min'=>'Pole nazwisko musi mieć minimum 5 znaków'
        ]);

        return $req->input();

    }
}
