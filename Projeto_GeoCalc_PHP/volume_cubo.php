<!DOCTYPE html>
<html lang="pt-br">
<head>
 <meta charset="UTF-8">
 <title>GeoCalc - Volume do Cubo</title>
</head>
<body>
    <h2>Volume do Cubo</h2>
    <p><strong>Descrição: </strong>A aresta elevada ao cubo.</p>
    <p><strong>Fórmula: </strong>volume = aresta³</p>
    <form action="volume_cubo.php" method="POST">
        <label for="aresta">Digite a medida da aresta (cm):</label>
        <input type="number" step="0.01" name="aresta" id="aresta" required><br><br>
        <button type="submit">Calcular</button>
    </form>
 <?php
 if ($_SERVER["REQUEST_METHOD"] == "POST") {
 $aresta = $_POST['aresta'];
 if ($aresta > 0) {
 $volume = pow($aresta, 3);
 echo "<hr>";
 echo "<h3> Resultado:</h3>";
 echo "Para uma aresta com o volume de <strong>{$aresta} cm</strong>:<br>";
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
