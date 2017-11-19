<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Leads extends Model
{
    //Configurando os campos do Model de acordo com a Migration
    protected $campos = [
        "nome", "email", "telefone", "nascimento", "endereco", "numero", "bairro", "cidade", "uf", "cep"
    ];

    protected $tabela = "leads";
}