<!DOCTYPE html>
<html lang="pt-br">
<head>
 <meta charset="UTF-8">
 <title>GeoCalc - Volume da Esfera</title>
</head>
<body>
    <h2>Volume da Esfera</h2>
    <p><strong>Descrição: </strong>Quatro terços de Pi multiplicado pelo raio ao cubo.</p>
    <p><strong>Fórmula: </strong>volume = (4/3) x π x raio³</p>
    <form action="volume_esfera.php" method="POST">
        <label for="raio">Digite a medida do raio (cm):</label>
        <input type="number" step="0.01" name="raio" id="raio" required><br><br>
        <button type="submit">Calcular</button>
    </form>
 <?php
 if ($_SERVER["REQUEST_METHOD"] == "POST") {
 $raio = $_POST['raio'];
 $pi = 3.14159;
 if ($raio > 0) {
 $volume = (4/3) * $pi * pow($raio, 3);
 echo "<hr>";
 echo "<h3> Resultado:</h3>";
 echo "Para uma esfera com um raio de <strong>{$raio} cm</strong>:<br>";
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
