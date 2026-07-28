<!DOCTYPE html>
<html lang="pt-br">
<head>
 <meta charset="UTF-8">
 <title>GeoCalc - Área do Triângulo</title>
</head>
<body>
 <h2> Cálculo da Área do Triângulo</h2>
 <p><strong>Descrição:</strong>Metade do produto da base pela altura.</p>
 <p><strong>Fórmula:</strong> A = (base × altura) / 2</p>
 <form action="" method="POST">
 <label for="base">Digite a medida da base (cm):</label>
 <input type="number" step="0.01" name="base" id="base" required><br>
 <label for="altura">Digite a medida da altura (cm):</label>
 <input type="number" step="0.01" name="altura" id="altura" required><br>
 <button type="submit">Calcular</button>
 </form>
 <?php
 if ($_SERVER["REQUEST_METHOD"] == "POST") {
 $base = $_POST['base'];
 $altura = $_POST['altura'];
 if ($base > 0 && $altura > 0) {
 $area = ($base * $altura) / 2;
 echo "<hr>";
 echo "<h3> Resultado:</h3>";
 echo "Para um triângulo com base de <strong>{$base} cm</strong> e altura de <strong>{$altura} cm</strong>:<br>";
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
