<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FormController extends Controller
{
    public function submit(Request $req)
    {
        $req->validate([
            'email'=>'required | email',
            'pass'=>'required | min:5',
            'lastName'=>'required|min:5|max:10',
            'firstName'=>'required|min:3|max:10',
        ],
            [
                'email.required'=>'Pole adres e-mail jest wymagane',
                'pass.required'=>'Pole hasło jest wymagane',
                'lastName.required'=>'Pole nazwisko jest wymagane',
                'lastName.min'=>'Minimalna długość nazwiska to :min',
                'lastName.max'=> 'Maksymalna długość nazwiska to :max',
                'firstName.required'=> 'Wypełnij pole imię!',
                'firstName.min'=> 'Minimalna długość imienia to :min',
                'firstName.max'=> 'Maksymalna długość imienia to :max'
            ]);

        $data = [
            'firstName' => $req->input('firstName'),
            'email' => $req->input('email'),
            'gender' => $req->input('gender'),
        ];

        return view('form', ['data' => $data]);
    }
}

