<?php

namespace CodeAgenda\Entities;

use Illuminate\Database\Eloquent\Model;

class Telefone extends Model
{
    protected $table = 'telefones';

/* Representa o nome do campo na tabela do banco de dados */
    protected $fillable = [
        'descricao',
        'codepais',
        'ddd',
        'prefixo',
        'sufixo'
    ]; 

    public function getNumeroAttribute(){
        return "{$this->codepais} ({$this->ddd}) {$this->prefixo}-{$this->sufixo}";
    }
}