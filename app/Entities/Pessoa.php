<?php

namespace CodeAgenda\Entities;

use Illuminate\Database\Eloquent\Model;

class Pessoa extends Model
{
    protected $table = 'pessoas';

/* Representa o nome do campo na tabela do banco de dados */
    protected $fillable = [
        'nome',
        'apelido',
        'sexo'
    ];
}