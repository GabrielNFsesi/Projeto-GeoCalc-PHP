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
    <a href="index.html" class="botao_home">GeoCalc</a>
    
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

<style>
    html {
        background-color: #f0f2f5;
        font-family: Arial, sans-serif;
    }

    body {
        background-color: #ffffff;
        max-width: 400px;
        margin: 40px auto;
        padding: 30px;
        border-radius: 12px;
        box-shadow: 0 4px 15px rgba(0, 0, 0, 0.1);
        box-sizing: border-box;
    }

    h2 {
        margin-top: 0;
        margin-bottom: 20px;
        color: #333;
        text-align: center;
    }

    p {
        color: #555;
        font-size: 14px;
        margin: 8px 0;
    }

    form {
        margin-top: 20px;
    }

    label {
        display: block;
        margin-bottom: 8px;
        color: #555;
        font-size: 14px;
        font-weight: bold;
    }

    input[type="number"] {
        width: 100%;
        padding: 10px;
        box-sizing: border-box;
        border: 1px solid #ccc;
        border-radius: 6px;
        font-size: 16px;
    }

    input[type="number"]:focus {
        border-color: #007bff;
        outline: none;
    }

    button {
        width: 100%;
        padding: 12px;
        background-color: #28a745;
        color: white;
        border: none;
        border-radius: 6px;
        font-size: 16px;
        font-weight: bold;
        cursor: pointer;
        transition: background-color 0.2s;
        margin-top: 10px;
    }

    button:hover {
        background-color: #218838;
    }

    hr {
        border: 0;
        border-top: 1px solid #e0e0e0;
        margin: 25px 0 15px 0;
    }

    h3 {
        color: #333;
        margin-top: 0;
        margin-bottom: 10px;
    }

    .botao_home {
        position: fixed;
        top: 20px;
        left: 20px;

        background-color: #007bff;
        color: white;

        text-decoration: none;

        padding: 10px 18px;
        border-radius: 8px;

        font-size: 15px;
        font-weight: bold;

        transition: 0.2s;
    }

    .botao_home:hover {
        background-color: #0056b3;
    }
 </style>

</body>
</html>
