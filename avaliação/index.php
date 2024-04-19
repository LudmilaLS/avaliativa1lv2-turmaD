<?php
include "Fatura.php";
include "Empregado.php";

// Demonstração das capacidades da classe Fatura
$fatura = new Fatura();

$fatura->setNumero(1);
$fatura->setDescricao("notebook");
$fatura->setQuantidade(2);
$fatura->setPreco(3000.5);

echo "Número da Fatura: {$fatura->getNumero()} \n";
echo "Descrição da Fatura: {$fatura->getDescricao()} \n";
echo "Quantidade Comprada: {$fatura->getQuantidade()} \n";
echo "Preço por Item: {$fatura->getPreco()} \n";
echo "Total da Fatura: {$fatura->getTotalFatura()} \n";


// Criação de dois objetos Empregado
$empregado1 = new Empregado();
$empregado2 = new Empregado();

$empregado1->setNome('Nome1');
$empregado1->setSobrenome('Sobrenome1');
$empregado1->setSalarioMensal(3000);

$empregado2->setNome('Nome2');
$empregado2->setSobrenome('Sobrenome2');
$empregado2->setSalarioMensal(5000);

// Exibição do salário anual de cada objeto
echo "Salário anual do empregado 1: {$empregado1->getSalarioAnual()} \n";
echo "Salário anual do empregado 2: {$empregado2->getSalarioAnual()} \n";

// Aplicação de um aumento de 10% em cada objeto
$empregado1->recebaAumento(10);
$empregado2->recebaAumento(10);

// Exibição do novo salário anual de cada objeto
echo "Novo salário anual do empregado 1: {$empregado1->getSalarioAnual()} \n";
echo "Novo salário anual do empregado 2: {$empregado2->getSalarioAnual()} \n";

?>