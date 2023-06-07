<?php

class Pessoa
{
  //variaveis privada
  private $nome;
  private $email;
  private $tel;
  private $idade;

//função publica para retornar o valor
  public function getNome()
  {
    return $this->nome; //retorna o valor armazenado na variavel nome
  }
//função publica para receber um valor
  public function setNome($valor)
  {
    $this->nome = $valor; //define $valor para dentro da variavel nome
  }


  public function getEmail()
  {
    return $this->email;
  }

  public function setEmail($valor)
  {
    $this->email = $valor;
  }


  public function getTel()
  {
    return $this->tel;
  }

  public function setTel($valor)
  {
    $this->tel = $valor;
  }


  public function getIdade()
  {
    return $this->idade;
  }

  public function setIdade($valor)
  {
    $this->idade = $valor;
  }
}

//recebe os dados do form
$name = $_POST['name'];
$email = $_POST['email'];
$cell = $_POST['cell'];
$age = $_POST['age'];

//cria nova pessoa e coloca os valores recebidos do form na "$pessoa1"
$pessoa1 = new Pessoa();
$pessoa1->setNome($name);
$pessoa1->setEmail($email);
$pessoa1->setTel($cell);
$pessoa1->setIdade($age);

//imprime os dados da "$pessoa1"
echo "Nome - {$pessoa1->getNome()}<br>";
echo "Email - {$pessoa1->getEmail()}<br>";
echo "Cell - {$pessoa1->getTel()}<br>";
echo "Idade - {$pessoa1->getIdade()}";

?>
