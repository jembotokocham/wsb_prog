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
            'lastName'=>'required|min:5|max:10',
            'firstName'=>'required|min:3|max:10',
        ],
        [
            'email.required'=>'Pole adres e-mail jest wymagane',
            'lastName.required'=>'Pole nazwisko jest wymagane',
            'lastName.min'=>'Minimalna długość nazwiska to:min',
            'lastName.max'=> 'Maksymalna długość nazwiska to:max',
            'firstName.required'=> 'Wypełnij pole imię!',
            'firstName.min'=> 'Minimalna długość imienia to:min',
            'firstName.max'=> 'Maksymalna długość imienia to:max'
        ]);

        return $req->input();

    }
}
