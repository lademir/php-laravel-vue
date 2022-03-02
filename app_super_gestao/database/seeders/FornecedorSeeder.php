<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Fornecedor;
use Illuminate\Support\Facades\DB;

class FornecedorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //instanciando o objeto
        $fornecedor = new Fornecedor();
        $fornecedor->nome = 'NomeSeeder';
        $fornecedor->site = 'SiteSeeder';
        $fornecedor->uf = 'SE';
        $fornecedor->email = 'EmailSeeder';
        $fornecedor->save();

        //metodo create (atencao nos fillables)
        Fornecedor::create([
            'nome' => 'Fornecedor100',
            'site' => 'Site100',
            'uf' => 'CE',
            'email' => 'fornecedor100'
        ]);

        //insert
        DB::table('fornecedores')->insert([
            'nome' => 'Fornecedor200',
            'site' => 'Site200',
            'uf' => 'CU',
            'email' => 'fornecedor500'
        ]);

    }
}
