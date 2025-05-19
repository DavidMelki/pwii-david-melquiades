<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $base_maior = $_POST["base_maior"];
    $base_menor = $_POST["base_menor"];
    $altura = $_POST["altura"];

    if (is_numeric($base_maior) && is_numeric($base_menor) && is_numeric($altura)) {
        $area = (($base_maior + $base_menor) * $altura) / 2;
        echo "<h2>Resultado:</h2>";
        echo "Área do trapézio: " . number_format($area, 2) . " m²";
    } else {
        echo "Por favor, insira valores numéricos válidos.";
    }
}
?>