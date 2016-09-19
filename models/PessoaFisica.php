<?php
require_once('models/Cliente.php');

/**
 * Class PessoaFisica
 */
class PessoaFisica extends Cliente{

    private $cpf;

    /**
     * @return mixed
     */
    public function getCpf()
    {
        return $this->cpf;
    }

    /**
     * @param mixed $cpf
     */
    public function setCpf($cpf)
    {
        $this->cpf = $cpf;
    }

    /**
     * @return stdClass
     */
    public function getDados(){
        $dados = parent::getDados();
        $dados->tipo = 0;
        $dados->documento = $this->getCpf();
        return $dados;
    }





}