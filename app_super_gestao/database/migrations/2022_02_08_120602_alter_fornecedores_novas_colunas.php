<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AlterFornecedoresNovasColunas extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        // Executado ao rodar migrate
        Schema::table('fornecedores', function (Blueprint $table){
            $table->string('uf',2);
            $table->string('email',150);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        // desfaz o que foi feito no up
        Schema::table('fornecedores', function (Blueprint $table){
            // $table->dropColumn('uf');
            $table->dropColumn(['uf','email']);
        });
    }
}
