<?php
namespace App\Models;

use \Illuminate\Database\Eloquent\Model;

class Pessoa extends Model {

    protected $primaryKey = 'PessoaId';
    protected $fillable = ['PrimeiroNome','SegundoNome','Endereco','CidadeId','DataNascimento','DataCadastro','Status'];
    public $timestamps = false;
    
    public function cidade() {
        return $this->belongsTo(\App\Models\Cidade::class, 'CidadeId');
    }
    
}



