<?php

class Cliente
{

    public $nome;
    public $idade;
    public $cpf;
    public $cep;
    public $endereco;
    public $numero;
    public $complemento;
    public $bairro;
    public $cidade;
    public $estado;

    public function setDados($nome,$idade,$cpf,$cep,$endereco,$numero,$complemento,$bairro,$cidade,$estado){
        $this->nome = $nome;
        $this->idade = $idade;
        $this->cpf = $cpf;
        $this->cep = $cep;
        $this->endereco = $endereco;
        $this->numero = $numero;
        $this->complemento = $complemento;
        $this->bairro = $bairro;
        $this->cidade = $cidade;
        $this->estado = $estado;
    }

}