<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FornecedorController extends Controller
{
    public function index()
    {
        $numero = 1;
        $fornecedores = [
            0 => [
                'nome' => 'Fornecedor 1',
                'status' => 'S',
                'cnpj' => '000.000.00/000.00',
                'ddd' => '81',
                'telfone' => '00000-0000'
            ],
            1 => [
                'nome' => 'Fornecedor 2',
                'status' => 'N',
                'cnpj' => null,
                'ddd' => '11',
                'telfone' => '00000-0000'
            ],
            2 => [
                'nome' => 'Fornecedor 3',
                'status' => 'N',
                'cnpj' => null,
                'ddd' => '31',
                'telfone' => '00000-0000'
            ],
        ];
        return view('app.fornecedor.index', compact('fornecedores', 'numero'));
    }
}
