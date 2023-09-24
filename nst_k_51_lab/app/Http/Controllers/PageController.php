<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function show($drive)
    {
        $drives = match(strtolower($drive)) {
            'fdd' => 'Dyskietka',
            'hdd' => 'Dysk HDD',
            'ssd' => 'Dysk SSD',
            default => 'Błędna wartość podana przez użytkownika!'
    };
        return $drives;

   //return $drives[$drive];
        //if (array_key_exists($drive, $drives))
           // return $drives[$drive];
       // else echo "Podaj prawidłowy klucz";
    }
}
