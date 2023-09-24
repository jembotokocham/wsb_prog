<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function show($drive)
    {

        $drives = [
            'fdd' => 'Dyskietka',
            'hdd' => 'Dysk HDD',
            'ssd' => 'Dysk SSD'
        ];

        //return $drives[$drive];
        if (array_key_exists($drive, $drives))
            return $drives[$drive];
        else echo "Podaj prawidłowy klucz";
    }
}
