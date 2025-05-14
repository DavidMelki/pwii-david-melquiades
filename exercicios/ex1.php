<!DOCTYPE HTML>
<html>
    <body>

    <?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $km = $_POST["km"];
    $litros = $_POST["litros"];
    

    if (is_numeric($km) && is_numeric($litros) && $litros > 0) {
        $consumo = $km / $litros;
        echo "<h2>Resultado:</h2>";
        echo "Distância percorrida: $km km<br>";
        echo "Combustível consumido: $litros litros<br>";
        echo "Consumo médio: " . number_format($consumo, 2) . " km/l";
    } else {
        echo "Por favor, insira valores numéricos válidos e certifique-se de que o número de litros seja maior que zero.";
    }
}
?>

    </body>
</html>