<?php
include_once('models/Cliente.php');


class ClientesController
{


    protected $clientes = [];


    public function __construct(){
        // resgatando dados do cliente JSON
        $arquivo = file_get_contents('data/clientes.json');
        $arrayClientes = json_decode($arquivo);
        foreach ($arrayClientes->items->item as $cli) {

            $cliente = new Cliente();
            $cliente->nome = $cli->nome;
            $cliente->cpf = $cli->cpf;
            $cliente->idade = $cli->idade;
            $cliente->cep = $cli->cep;
            $cliente->endereco = $cli->endereco;
            $cliente->numero = $cli->numero;
            $cliente->complemento = $cli->complemento;
            $cliente->bairro = $cli->bairro;
            $cliente->cidade = $cli->cidade;
            $cliente->estado = $cli->estado;
            $this->clientes[$cli->nome] = $cliente;
        }

    }

    public function getClientes($orderBy){

        if($orderBy == 'ASC')
            ksort($this->clientes);
        else
            rsort($this->clientes);

        return $this->clientes;

    }

    public function findCliente($nome){
        return $this->clientes[$nome];
    }

}