<!DOCTYPE HTML>
<html>
    <body>

    <?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $comprimento = $_POST["comprimento"];
    $largura = $_POST["largura"];
    $altura = $_POST["altura"];


    if (is_numeric($comprimento) && is_numeric($largura) && is_numeric($altura) && $comprimento && $largura && $altura > 0) {
       $volume = $comprimento * $largura * $altura

        echo "<h2>Resultado:</h2>";
        echo "Comprimento: $comprimento cm<br>";
        echo "Largura: $largura cm<br>";
        echo "Altura: $altura cm<br>";
        echo "Volume: " . number_format($volume, 2) . " l";
    } else {
        echo "Por favor, insira valores numéricos válidos e certifique-se de que a medida seja maior que zero.";
    }
}
?>

    </body>
</html>