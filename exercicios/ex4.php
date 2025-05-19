<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $valor = $_POST["valor"];

    if (is_numeric($valor)) {
        $valor_total = $valor * 1.16;
        $parcela = $valor_total / 10;

        echo "<h2>Resultado:</h2>";
        echo "Valor total com acréscimo de 16%: R$ " . number_format($valor_total, 2, ',', '.') . "<br>";
        echo "Valor de cada parcela (10x): R$ " . number_format($parcela, 2, ',', '.');
    } else {
        echo "Por favor, insira um valor numérico válido.";
    }
}
?>