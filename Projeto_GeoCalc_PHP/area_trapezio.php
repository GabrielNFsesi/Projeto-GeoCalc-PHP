<!DOCTYPE html>
<html lang="pt-br">
<head>
 <meta charset="UTF-8">
 <title>GeoCalc - Área do Trapézio</title>
</head>
<body>
    <h2>Área do Trapézio</h2>
    <p><strong>Descrição: </strong>A soma das bases multiplicada pela altura, dividida por dois.</p>
    <p><strong>Fórmula: </strong>área = ((base maior + base menor) x altura) / 2</p>
    <form action="area_trapezio.php" method="POST">
        <label for="base_maior">Digite a medida da base maior (cm):</label>
        <input type="number" step="0.01" name="base_maior" id="base_maior" required><br><br>
        <label for="base_menor">Digite a medida da base menor (cm):</label>
        <input type="number" step="0.01" name="base_menor" id="base_menor" required><br><br>
        <label for="altura">Digite a medida da altura (cm):</label>
        <input type="number" step="0.01" name="altura" id="altura" required><br><br>
        <button type="submit">Calcular</button>
    </form>
 <?php
 if ($_SERVER["REQUEST_METHOD"] == "POST") {
 $base_maior = $_POST['base_maior'];
 $base_menor = $_POST['base_menor'];
 $altura = $_POST['altura'];
 if ($base_maior > 0 && $base_menor > 0 && $altura > 0) {
 $area = (($base_maior + $base_menor)    * $altura) / 2;
 echo "<hr>";
 echo "<h3> Resultado:</h3>";
 echo "Para um trapézio com a base maior de <strong>{$base_maior} cm</strong>, a base menor de <strong>{$base_menor} cm</strong> e a altura de <strong>{$altura} cm</strong>:<br>";
 echo "A área total é de <strong>" . number_format($area, 2, ',', '.') . "
cm²</strong>.";
 } else {
 echo "<p style='color: red;'>Por favor, insira um número maior que zero!
</p>";
 }
 }
 ?>
</body>
</html>
