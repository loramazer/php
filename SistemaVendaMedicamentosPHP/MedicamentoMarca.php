<?php
class MedicamentoMarca extends Medicamento {
    private $marca;

    #[\Override]
    public function __construct($nome, $valor, $marca) {
        parent::__construct($nome, $valor);
        $this->marca = $marca;
    }

    public function getMarca() {
        return $this->marca;
    }

    #[\Override]
    public function aplicarDesconto() {
        $this->valor = $this->valor * 0.95; 
    }
}