<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $comprimento = $_POST["comprimento"];
    $largura = $_POST["largura"];
    $altura = $_POST["altura"];

    if (is_numeric($comprimento) && is_numeric($largura) && is_numeric($altura)) {
        $volume = $comprimento * $largura * $altura;
        echo "<h2>Resultado:</h2>";
        echo "Volume da caixa: " . number_format($volume, 2) . " m³";
    } else {
        echo "Por favor, insira valores numéricos válidos.";
    }
}
?>