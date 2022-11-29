<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use Illuminate\Database\Eloquent\SoftDeletes;

class ColetaResiduo extends Model
{
    use HasFactory;

    protected $fillable = [
        //Endereço
        'cep',
        'estado',
        'cidade',
        'bairro',
        'logradouro',
        'numero',
        'complemento',

        //Dados Sobre a Coleta
        'user_id',
        'tipoResiduo',
        'diaColeta',
        'status',
    ];
}
