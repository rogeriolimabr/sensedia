<?php

namespace App\Controllers;

use App\Models\Pessoa;
use App\Models\Cidade;

class PessoaController
{

    public function index() {
        $pessoas = Pessoa::all();
        require_once APP_ROOT . '\app\views\home.php';
    }

    public function search($keywords = null) {
        $pessoas = Pessoa::where('PrimeiroNome', 'like', '%'.$keywords.'%')
        ->orWhere('SegundoNome', 'like', '%'.$keywords.'%')
        ->orWhere('Endereco', 'like', '%'.$keywords.'%')
        ->orWhere('DataNascimento', 'like', '%'.$keywords.'%')
        ->get();

        require_once APP_ROOT . '\app\views\home.php';
    }

	public function edit(int $id)
	{
        $cidades = Cidade::all();
        $pessoa = Pessoa::find($id);
        if($pessoa) {
            require_once APP_ROOT . '\app\views\edit.php';
        } else {
            require_once APP_ROOT . '\app\views\error.php';
        }

	}

    public function save(int $id)
    {
        $pessoa = Pessoa::find($id);
        $pessoa->fill($_POST);
        $pessoa->save();

        require_once APP_ROOT . '\app\views\show.php';
    }
}

