<!DOCTYPE html>
<html>
<head>
    <title>Resultado IMC</title>

    <style>
          body { 
            background-color: #C5D4EB;
        }

        h2 {
            background-color: #CADCFA;
            color: #3D4146;
            padding: 10px;
            border-radius: 10px;
            margin-top: 40px;
        }

        cesar {
            font-family: 'Pacifico', cursive;
            color: #3D4146;
        }


    </style>

</head>
<body>

    <h2>Resultado del IMC</h2>

    <cesar>
    <?php

    $peso = $_POST['peso'];
    $altura = $_POST['altura'];

    // Calcular IMC
    $imc = $peso / ($altura * $altura);

    echo "Peso: " . $peso . " kg<br>";
    echo "Altura: " . $altura . " metros<br>";
    echo "IMC: " . round($imc, 2) . "<br><br>";

    // Diagnóstico
    if ($imc < 18.5) {
        echo "<span class='Aprobado'>Diagnóstico: Bajo peso</span>";
    } elseif ($imc < 25) {
        echo "<span class='Excelente'>Diagnóstico: Peso normal</span>";
    } elseif ($imc < 30) {
        echo "<span class='Aprobado'>Diagnóstico: Sobrepeso</span>";
    } else {
        echo "<span class='Reprobado'>Diagnóstico: Obesidad</span>";
    }

    ?>
    </cesar>

</body>
</html>