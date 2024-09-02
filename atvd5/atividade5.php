<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Atividade 5</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div id = "formulario">
        <form method="POST" action="">
            <label for="base_triangulo">Insira a base do triângulo:</label>
            <input type="number" id="base_triangulo" name="base_triangulo" required>
            <br>
            <br>
            <label for="altura_triangulo">Insira a altura do triângulo:</label>
            <input type="number" id="altura_triangulo" name="altura_triangulo" required>
            <br>
            <br>
            <button type="submit" name="calcular_area" id="calcular_area">Calcular</button>
        </form>
   
        <?php
            if ($_SERVER['REQUEST_METHOD'] == 'POST') {
                if (isset($_POST['calcular_area'])) {
                    $base = $_POST['base_triangulo'];
                    $altura = $_POST['altura_triangulo'];
                    $area = ($base * $altura) / 2;

                    echo "<p>A área do triângulo é: $area</p>";

                    $limite = 100;

                    if ($area > $limite) {
                        echo "<p>A área é maior do que $limite.</p>";
                    } else {
                        echo "<p>A área é menor ou igual a $limite.</p>";
                    }
                }
            }
        ?>
    </div>
</body>
</html>
