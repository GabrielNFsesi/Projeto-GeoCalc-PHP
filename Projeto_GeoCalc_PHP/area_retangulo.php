<!DOCTYPE html>
<html lang="pt-br">
<head>
 <meta charset="UTF-8">
 <title>GeoCalc - Área do Quadrado</title>
</head>
<body>
    <h2>Área do Retângulo</h2>
    <p><strong>Descrição: </strong>Produto da base pela altura.</p>
    <p><strong>Fórmula: </strong>área = base x altura</p>
    <form action="area_retangulo.php" method="POST">
        <label for="base">Digite a medida da base (cm):</label>
        <input type="number" step="0.01" name="base" id="base" required><br><br>
        <label for="altura">Digite a medida da altura (cm):</label>
        <input type="number" step="0.01" name="altura" id="altura" required><br><br>
        <button type="submit">Calcular</button>
    </form>
 <?php
 if ($_SERVER["REQUEST_METHOD"] == "POST") {
 $base = $_POST['base'];
 $altura = $_POST['altura'];
 if ($base > 0 && $altura > 0) {
 $area = ($base * $altura);
 echo "<hr>";
 echo "<h3> Resultado:</h3>";
 echo "Para um retangulo com a base de <strong>{$base} cm</strong> e a altura de <strong>{$altura} cm</strong>:<br>";
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
