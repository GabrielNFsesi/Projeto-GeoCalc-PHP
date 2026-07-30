<!DOCTYPE html>
<html lang="pt-br">
<head>
 <meta charset="UTF-8">
 <title>GeoCalc - Área do Quadrado</title>
</head>
<body>
 <h2> Cálculo da Área do Quadrado</h2>
 <p><strong>Descrição:</strong> A área do quadrado é calculada multiplicando a
medida de um lado por ele mesmo.</p>
 <p><strong>Fórmula:</strong> A = Lado²</p>
 <form action="" method="POST">
 <label for="lado">Digite a medida do lado (cm):</label>
 <input type="number" step="0.01" name="lado" id="lado" required><br>
 <button type="submit">Calcular</button>
 </form>
<a href="index.html" class="botao_home">GeoCalc</a>

 <?php
 if ($_SERVER["REQUEST_METHOD"] == "POST") {
 $lado = $_POST['lado'];
 if ($lado > 0) {
 $area = pow($lado, 2);
 echo "<hr>";
 echo "<h3> Resultado:</h3>";
 echo "Para um quadrado com lado de <strong>{$lado} cm</strong>:<br>";
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
        margin-bottom: 10px;
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
