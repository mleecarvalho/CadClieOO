<?php

namespace MC\Cliente;

abstract class Cliente
{

    private $nome;
    private $idade;
    private $cep;
    private $endereco;
    private $numero;
    private $complemento;
    private $bairro;
    private $cidade;
    private $estado;
    private $importancia;

    /**
     * @return mixed
     */
    public function getNome()
    {
        return $this->nome;
    }

    /**
     * @param mixed $nome
     */
    public function setNome($nome)
    {
        $this->nome = $nome;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getIdade()
    {
        return $this->idade;
    }

    /**
     * @param mixed $idade
     */
    public function setIdade($idade)
    {
        $this->idade = $idade;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getCep()
    {
        return $this->cep;
    }

    /**
     * @param mixed $cep
     */
    public function setCep($cep)
    {
        $this->cep = $cep;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getEndereco()
    {
        return $this->endereco;
    }

    /**
     * @param mixed $endereco
     */
    public function setEndereco($endereco)
    {
        $this->endereco = $endereco;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getNumero()
    {
        return $this->numero;
    }

    /**
     * @param mixed $numero
     */
    public function setNumero($numero)
    {
        $this->numero = $numero;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getComplemento()
    {
        return $this->complemento;
    }

    /**
     * @param mixed $complemento
     */
    public function setComplemento($complemento)
    {
        $this->complemento = $complemento;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getBairro()
    {
        return $this->bairro;
    }

    /**
     * @param mixed $bairro
     */
    public function setBairro($bairro)
    {
        $this->bairro = $bairro;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getCidade()
    {
        return $this->cidade;
    }

    /**
     * @param mixed $cidade
     */
    public function setCidade($cidade)
    {
        $this->cidade = $cidade;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getEstado()
    {
        return $this->estado;
    }

    /**
     * @param mixed $estado
     */
    public function setEstado($estado)
    {
        $this->estado = $estado;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getImportancia()
    {
        return $this->importancia;
    }

    /**
     * @param mixed $importancia
     */
    public function setImportancia($importancia)
    {
        $this->importancia = $importancia;
        return $this;
    }



    public function getDados(){
        $dados = new \stdClass();
        $dados->nome = $this->getNome();
        $dados->idade = $this->getIdade();
        $dados->cep = $this->getCep();
        $dados->endereco = $this->getEndereco();
        $dados->numero = $this->getNumero();
        $dados->complemento = $this->getComplemento();
        $dados->bairro = $this->getBairro();
        $dados->cidade = $this->getCidade();
        $dados->estado = $this->getEstado();
        $dados->importancia = $this->getImportancia();
        return $dados;
    }


}