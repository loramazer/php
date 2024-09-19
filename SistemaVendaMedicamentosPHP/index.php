<!DOCTYPE html>
<!--
Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
Click nbfs://nbhost/SystemFileSystem/Templates/Project/PHP/PHPProject.php to edit this template
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        require_once('Medicamento.php');
require_once('MedicamentoGenerico.php');
require_once('MedicamentoMarca.php');
require_once('Farmacia.php');

$farmacia = new Farmacia();

$med1 = new MedicamentoGenerico("Paracetamol", 10);
$med2 = new MedicamentoGenerico("Ibuprofeno", 15);
$med3 = new MedicamentoGenerico("Dipirona", 8);
$med4 = new MedicamentoGenerico("Omeprazol", 20);
$med5 = new MedicamentoGenerico("AAS", 5);

$med6 = new MedicamentoMarca("Tylenol", 20, "Johnson & Johnson");
$med7 = new MedicamentoMarca("Nexium", 50, "AstraZeneca");
$med8 = new MedicamentoMarca("Viagra", 100, "Pfizer");

$farmacia->adicionarMedicamento($med1);
$farmacia->adicionarMedicamento($med2);
$farmacia->adicionarMedicamento($med3);
$farmacia->adicionarMedicamento($med4);
$farmacia->adicionarMedicamento($med5);

$farmacia->adicionarMedicamento($med6);
$farmacia->adicionarMedicamento($med7);
$farmacia->adicionarMedicamento($med8);

$farmacia->imprimirVenda();
        ?>
    </body>
</html>
