<?php
class Medicamento {
    protected $nome;
    protected $valor;

    public function __construct($nome, $valor) {
        $this->nome = $nome;
        $this->valor = $valor;
    }

    public function getNome() {
        return $this->nome;
    }

    public function getValor() {
        return $this->valor;
    }

    public function aplicarDesconto() {
        
    }
}
