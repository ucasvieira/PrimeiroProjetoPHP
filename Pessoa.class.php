<?php //inicializando o php

class pessoa{ //criando a classe pessoa
    private $nome; //atribuindo a variável privada
    private $endereco; //atribuindo a variável privada
    private $bairro; //atribuindo a variável privada
    private $cep; //atribuindo a variável privada
    private $cidade; //atribuindo a variável privada
    private $estado; //atribuindo a variável privada

    public function setNome($nome){ //criando função pública para encapsulamento
        $this->nome = $nome; //encapsulando a variável
    } //fechando a função

    public function setEndereço($endereço){ //criando função pública para encapsulamento
        $this->endereco = $endereco; //encapsulando a variável
    } //fechando a função

    public function setBairro($bairro){ //criando função pública para encapsulamento
        $this->bairro = $bairro; //encapsulando a variável
    } //fechando a função

    public function setCep($cep){ //criando função pública para encapsulamento
        $this->cep = $cep; //encapsulando a variável
    } //fechando a função

    public function setCidade($cidade){ //criando função pública para encapsulamento
        $this->cidade = $cidade; //encapsulando a variável
    } //fechando a função

    public function setEstado($estado){ //criando função pública para encapsulamento
        $this->estado = $estado; //encapsulando a variável
    } //fechando a função

    public function getNome(){ //criando função pública para receber a variável encapsulada
        return $this->nome; //recebendo a variável encapsulada
    } //fechando a função

    public function getEndereço(){ //criando função pública para receber a variável encapsulada
        return $this->endereço; //recebendo a variável encapsulada
    } //fechando a função

    public function getBairro(){ //criando função pública para receber a variável encapsulada
        return $this->bairro; //recebendo a variável encapsulada
    } //fechando a função

    public function getCep(){ //criando função pública para receber a variável encapsulada
        return $this->cep; //recebendo a variável encapsulada
    } //fechando a função

    public function getCidade(){ //criando função pública para receber a variável encapsulada
        return $this->cidade; //recebendo a variável encapsulada
    } //fechando a função

    public function getEstado(){ //criando função pública para receber a variável encapsulada
        return $this->estado; //recebendo a variável encapsulada
    } //fechando a função
}
//encerrando o php?> 