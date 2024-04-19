<?php
class Empregado {
    private $nome;
    private $sobrenome;
    private $salarioMensal;

    // Métodos get para cada atributo
    public function getNome() {
        return $this->nome;
    }
    public function getSobrenome() {
        return $this->sobrenome;
    }
    public function getSalarioMensal() {
        return $this->salarioMensal;
    }

     // Métodos set para cada atributo
    public function setNome($nome) {
        $this->nome = $nome;
    }
    public function setSobrenome($sobrenome) {
        $this->sobrenome = $sobrenome;
    }
    public function setSalarioMensal($salarioMensal) {
        $this->salarioMensal = $salarioMensal;
    }

    // Método para calcular o novo salário com aumento
    public function recebaAumento($porcentagem) {
        $this->salarioMensal += $this->salarioMensal * ($porcentagem / 100);
    }

    // Método para calcular o salário anual
    public function getSalarioAnual() {
        return $this->salarioMensal * 12;
    }
}

?>