<!DOCTYPE html>
<html lang="pt-br">
<head>
 <meta charset="UTF-8">
 <title>GeoCalc - Volume do Cilindro</title>
</head>
<body>
    <h2>Volume do Cilindro</h2>
    <p><strong>Descrição: </strong>A área da base circular multiplicada pela altura do cilindro.</p>
    <p><strong>Fórmula: </strong>volume = π x raio² x altura</p>
    <form action="volume_cilindro.php" method="POST">
        <label for="raio">Digite a medida do raio da base (cm):</label>
        <input type="number" step="0.01" name="raio" id="raio" required><br><br>
        <label for="altura">Digite a medida da altura (cm):</label>
        <input type="number" step="0.01" name="altura" id="altura" required><br><br>
        <button type="submit">Calcular</button>
    </form>
 <?php
 if ($_SERVER["REQUEST_METHOD"] == "POST") {
 $raio = $_POST['raio'];
 $pi = 3.14159;
 $altura = $_POST['altura'];
 if ($raio > 0 && $altura > 0) {
 $volume = $pi * pow($raio, 2) * $altura;
 echo "<hr>";
 echo "<h3> Resultado:</h3>";
 echo "Para um cilindro com um raio de <strong>{$raio} cm</strong> e uma altura de <strong>{$altura} cm</strong>:<br>";
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
