<?php //inicializando o php

class pessoa{ //criando a classe pessoa
    private $nome; //atribuindo a variavel privada
    private $endereco; //atribuindo a variavel privada
    private $bairro; //atribuindo a variavel privada
    private $cep; //atribuindo a variavel privada
    private $cidade; //atribuindo a variavel privada
    private $estado; //atribuindo a variavel privada

    public function setNome($nome){ //criando funcao publica para encapsulamento
        $this->nome = $nome; //encapsulando a variavel
    } //fechando a funcao

    public function setEndereca($endereca){ //criando funcao publica para encapsulamento
        $this->endereco = $endereco; //encapsulando a variavel
    } //fechando a funcao

    public function setBairro($bairro){ //criando funcao publica para encapsulamento
        $this->bairro = $bairro; //encapsulando a variavel
    } //fechando a funcao

    public function setCep($cep){ //criando funcao publica para encapsulamento
        $this->cep = $cep; //encapsulando a variavel
    } //fechando a funcao

    public function setCidade($cidade){ //criando funcao publica para encapsulamento
        $this->cidade = $cidade; //encapsulando a variavel
    } //fechando a funcao

    public function setEstado($estado){ //criando funcao publica para encapsulamento
        $this->estado = $estado; //encapsulando a variavel
    } //fechando a funcao

    public function getNome(){ //criando funcao publica para receber a variavel encapsulada
        return $this->nome; //recebendo a variavel encapsulada
    } //fechando a funcao

    public function getEndereca(){ //criando funcao publica para receber a variavel encapsulada
        return $this->endereca; //recebendo a variavel encapsulada
    } //fechando a funcao

    public function getBairro(){ //criando funcao publica para receber a variavel encapsulada
        return $this->bairro; //recebendo a variavel encapsulada
    } //fechando a funcao

    public function getCep(){ //criando funcao publica para receber a variavel encapsulada
        return $this->cep; //recebendo a variavel encapsulada
    } //fechando a funcao

    public function getCidade(){ //criando funcao publica para receber a variavel encapsulada
        return $this->cidade; //recebendo a variavel encapsulada
    } //fechando a funcao

    public function getEstado(){ //criando funcao publica para receber a variavel encapsulada
        return $this->estado; //recebendo a variavel encapsulada
    } //fechando a funcao
}
//encerrando o php?> 
