<?php

namespace Database\Seeders;

use App\Models\SiteContato;
use Database\Factories\SiteContatoFactory;
use Illuminate\Database\Seeder;

class SiteContatoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        // $contato = new SiteContato();
        // $contato->nome = 'ContatoSeeder';
        // $contato->telefone = '(00)00000-0000';
        // $contato->email = 'emailSeeder';
        // $contato->motivo_contato = 1;
        // $contato->mensagem = 'MensagemSeeder';

        // $contato->save();

        \App\Models\SiteContato::factory()->count(100)->create();
    }
}
