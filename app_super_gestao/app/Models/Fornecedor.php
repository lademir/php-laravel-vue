<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

// fornecedors -> padrao do laravel é pegar o nome do model e colocar um s no final

class Fornecedor extends Model
{
    use HasFactory;
    // vai sobrepor a nomeacao automatica da tabela 
    protected $table = 'fornecedores';
    // permitir que sejam preenchidos a partir do metodo create
    protected $fillable = ['nome', 'site', 'uf', 'email'];
}
