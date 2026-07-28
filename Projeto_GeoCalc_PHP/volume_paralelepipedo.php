<!DOCTYPE html>
<html lang="pt-br">
<head>
 <meta charset="UTF-8">
 <title>GeoCalc - Volume do Paralelepípedo</title>
</head>
<body>
    <h2>Volume do Paralelepípedo</h2>
    <p><strong>Descrição: </strong>O produto das três dimensões do bloco.</p>
    <p><strong>Fórmula: </strong>volume = comprimento x largura x altura</p>
    <form action="volume_paralelepipedo.php" method="POST">
        <label for="comprimento">Digite a medida do comprimento (cm):</label>
        <input type="number" step="0.01" name="comprimento" id="comprimento" required><br><br>
        <label for="largura">Digite a medida da largura (cm):</label>
        <input type="number" step="0.01" name="largura" id="largura" required><br><br>
        <label for="altura">Digite a medida da altura (cm):</label>
        <input type="number" step="0.01" name="altura" id="altura" required><br><br>
        <button type="submit">Calcular</button>
    </form>
 <?php
 if ($_SERVER["REQUEST_METHOD"] == "POST") {
 $comprimento = $_POST['comprimento'];
 $largura = $_POST['largura'];
 $altura = $_POST['altura'];
 if ($comprimento > 0 && $largura > 0 && $altura > 0) {
 $volume = $comprimento * $largura * $altura;
 echo "<hr>";
 echo "<h3> Resultado:</h3>";
 echo "Para um paralelepípedo com dimensões <strong>{$comprimento} cm</strong> x <strong>{$largura} cm</strong> x <strong>{$altura} cm</strong>:<br>";
 echo "O volume total é de <strong>" . number_format($volume, 2, ',', '.') . "
cm³</strong>.";
 } else {
 echo "<p style='color: red;'>Por favor, insira um número maior que zero!
</p>";
 }
 }
 ?>
</body>
</html>
