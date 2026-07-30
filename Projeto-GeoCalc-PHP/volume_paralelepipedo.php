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
    <a href="index.html" class="botao_home">GeoCalc</a>
    
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
