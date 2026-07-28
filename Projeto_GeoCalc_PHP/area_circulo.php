<!DOCTYPE html>
<html lang="pt-br">
<head>
 <meta charset="UTF-8">
 <title>GeoCalc - Área do Círculo</title>
</head>
<body>
    <h2>Área do Círculo</h2>
    <p><strong>Descrição: </strong>Metade do produto da base pela altura.</p>
    <p><strong>Fórmula: </strong>área = π x raio²</p>
    <form action="area_circulo.php" method="POST">
        <label for="raio">Digite a medida do raio (cm):</label>
        <input type="number" step="0.01" name="raio" id="raio" required><br><br>
        <button type="submit">Calcular</button>
    </form>
 <?php
 if ($_SERVER["REQUEST_METHOD"] == "POST") {
 $raio = $_POST['raio'];
 $pi = 3.14159;
 if ($raio > 0) {
 $area = $pi * pow($raio, 2);
 echo "<hr>";
 echo "<h3> Resultado:</h3>";
 echo "Para um círculo com raio de <strong>{$raio} cm</strong>:<br>";
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
