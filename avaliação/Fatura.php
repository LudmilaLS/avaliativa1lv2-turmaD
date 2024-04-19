<?php
class Fatura{
    private $numero;
    private $descricao;
    private $quantidade;
    private $preco;

    // Métodos get
    public function getNumero() {
        return $this->numero;
    }
    public function getDescricao() {
        return $this->descricao;
    }
    public function getQuantidade() {
        return $this->quantidade;
    }
    public function getPreco() {
        return $this->preco;
    }

    // Métodos set
    public function setNumero($numero) {
        $this->numero = $numero;
    }
    public function setDescricao($descricao) {
        $this->descricao = $descricao;
    }
    public function setQuantidade($quantidade) {
        if ($quantidade > 0) {
            $this->quantidade = $quantidade;
        } else {
            $this->quantidade = 0;
        }
    }
    public function setPreco($preco) {
        if ($preco > 0.0) {
            $this->preco = $preco;
        } else {
            $this->preco = 0.0;
        }
    }

    // Método getTotalFatura
    public function getTotalFatura() {
        if ($this->quantidade > 0 && $this->preco > 0.0) {
            return $this->quantidade * $this->preco;
        } else {
            return 0.0;
        }
    }
}

?>