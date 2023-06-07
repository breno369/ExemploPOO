<?php

include 'pessoa.php';


$nome = new Pessoa();
$nome->setNome("nome");
$nome->setEmail("exemplo@de.email");
$nome->setCpf("000-000-000.00");
$nome->setSenha("369");
$nome->setTel("(00) 00000-0000");
$nome->setCep(12345678);
$nome->setIdade(00);
$nome->setRg(123456789);
$nome->setId(16369);

echo"Nome - {$nome -> getNome()}";
echo"\nEmail - {$nome -> getEmail()}";
echo"\nCPF - {$nome -> getCpf()}";
echo"\nSenha - {$nome -> getSenha()}";
echo"\nTelefone - {$nome -> getTel()}";
echo"\nCEP - {$nome -> getCep()}";
echo"\nIdade - {$nome -> getIdade()}";
echo"\nRG - {$nome -> getRg()}";
echo"\nId - {$nome -> getId()}";


?>