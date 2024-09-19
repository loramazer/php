<?php

class Farmacia {
    private $medicamentos = array();

    public function adicionarMedicamento($medicamento) {
        $this->medicamentos[] = $medicamento;
    }

    public function calcularTotal() {
        $totalSemDesconto = 0;
        $totalComDesconto = 0;

        foreach ($this->medicamentos as $medicamento) {
            $valorOriginal = $medicamento->getValor();
            $totalSemDesconto += $valorOriginal;

            $medicamento->aplicarDesconto();
            $totalComDesconto += $medicamento->getValor();
        }

        return array($totalSemDesconto, $totalComDesconto);
    }

    public function imprimirVenda() {
        $totalSemDesconto = 0;
        $totalComDesconto = 0;

        foreach ($this->medicamentos as $medicamento) {
            $valorOriginal = $medicamento->getValor();
            $totalSemDesconto += $valorOriginal;

            $medicamento->aplicarDesconto();
            $valorComDesconto = $medicamento->getValor();
            $totalComDesconto += $valorComDesconto;

            echo "Medicamento: " . $medicamento->getNome();
            if ($medicamento instanceof MedicamentoMarca) {
                echo " | Marca: " . $medicamento->getMarca();
            }
            echo " | Valor sem Desconto: " . $valorOriginal;
            echo " | Valor com Desconto: " . $valorComDesconto . "<br>";
        }

        echo "<br>Total sem Desconto: $totalSemDesconto<br>";
        echo "Total com Desconto: $totalComDesconto<br>";
    }
}