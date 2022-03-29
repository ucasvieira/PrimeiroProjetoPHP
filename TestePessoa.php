<?php //Inicializando o php
require_once("Pessoa.class.php"); //requirindo um outro arquivo

$pessoa = new Pessoa(); //atribuindo a classe
$pessoa->setNome("Jeferson Roberto de Lima"); //atribuindo valor a variável encapsulada em outro arquivo
echo $pessoa->getNome(); //exibindo na tela o valor da variável encapsulada

//encerrando o php?>