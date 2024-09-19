<?php
class MedicamentoGenerico extends Medicamento {
    
    #[\Override]
    public function aplicarDesconto() {
        $this->valor = $this->valor * 0.90; 
    }
}
