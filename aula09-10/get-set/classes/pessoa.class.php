<?php
class Pessoa {
    private $nome;
    private $idade;

    public function getNome() {
        return $this->nome;
    }

    public function getIdade() {
        return $this->idade;
    }

    public function setNome($nome) {
        $this->nome = $nome;
    }

    public function setIdade($idade) {
        $this->idade = $idade;
    }
}

$pessoa = new Pessoa();
//$pessoa->nome;

$pessoa->setNome('Mateus');
$pessoa->setIdade(20);

echo "{$pessoa->getNome()} ";
echo "{$pessoa->getIdade()} anos.";


?>