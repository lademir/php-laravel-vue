<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TesteController extends Controller
{
    public function teste(int $p1, int $p2)
    {
        // echo "A soma de $p1 + $p2 e': ".($p1+$p2);

        // return view('site.teste', ['p1' => $p1, 'p2' => $p2]);  => Array associativo

        //return view('site.teste', compact('p1','p2'));//  => Usando compact, que no fim das contas fica igual a linha 13

        return view('site.teste')->with('p1', $p1)->with('p2', $p2); // com with
    }
}
