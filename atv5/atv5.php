<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cálculo da Área do Triângulo</title>
    <link rel="stylesheet" href="styles.css">
</head>

<body>
    <div class="container">
        <h1>Cálculo da Área do Triângulo</h1>
        <form method="post">
            <label for="base">Base:</label>
            <input type="number" id="base" name="base" step="0.01" required>
            <label for="altura">Altura:</label>
            <input type="number" id="altura" name="altura" step="0.01" required>
            <button type="submit">Calcular</button>
        </form>

        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {

            $valor_limite = 100;

    
            $base = $_POST['base'];
            $altura = $_POST['altura'];

    
            $area = ($base * $altura) / 2;

            echo "<div class='result'>";
            echo "<p>A área do triângulo é: " . number_format($area, 2) . "</p>";
            if ($area > $valor_limite) {
                echo "<p>A área é maior do que o valor limite de $valor_limite.</p>";
            } else {
                echo "<p>A área é menor ou igual ao valor limite de $valor_limite.</p>";
            }
            echo "</div>";
        }
        ?>
    </div>
</body>

</html>