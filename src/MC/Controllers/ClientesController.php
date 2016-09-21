<?php

namespace MC\Controllers;

use MC\Cliente\Types\PessoaFisica;
use MC\Cliente\Types\PessoaJuridica;

class ClientesController
{


    protected $clientes = [];


    public function __construct(){

        // resgatando dados do cliente JSON
        $arquivo = file_get_contents(CLASS_DIR.'MC/Cliente/Storage/clientes.json');
        $arrayClientes = json_decode($arquivo);
        foreach ($arrayClientes->items->item as $cli) {

            if (isset($cli->cnpj)){
                $cliente = new PessoaJuridica();
                $cliente->setCnpj($cli->cnpj);
            }else{
                $cliente = new PessoaFisica();
                $cliente->setCpf($cli->cpf);
            }

            $cliente->setNome($cli->nome)
                ->setIdade($cli->idade)
                ->setCep($cli->cep)
                ->setEndereco($cli->endereco)
                ->setNumero($cli->numero)
                ->setComplemento($cli->complemento)
                ->setBairro($cli->bairro)
                ->setCidade($cli->cidade)
                ->setEstado($cli->estado)
                ->setImportancia($cli->importancia);

            $this->clientes[$cli->nome] = $cliente->getDados();
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