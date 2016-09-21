<?php

namespace MC\Cliente\Types;

use MC\Cliente\Cliente;

class PessoaJuridica extends Cliente
{
    private $cnpj;

    /**
     * @return mixed
     */
    public function getCnpj()
    {
        return $this->cnpj;
    }

    /**
     * @param mixed $cnpj
     */
    public function setCnpj($cnpj)
    {
        $this->cnpj = $cnpj;
    }

    /**
     * @return stdClass
     */
    public function getDados(){
        $dados = parent::getDados();
        $dados->tipo = 1;
        $dados->documento = $this->getCnpj();
        return $dados;
    }

}