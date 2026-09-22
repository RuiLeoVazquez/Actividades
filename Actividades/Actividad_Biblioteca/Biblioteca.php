<!DOCTYPE html>
<html>
<head>
    <title>Biblioteca TecNM</title>
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
<cesar>
    <h2>Catálogo de libros - Biblioteca TecNM</h2>
</cesar>
    <form method="GET">
        <label>Buscar libro:</label>
        <input type="text" name="buscar" placeholder="Escribe el título">
        <input type="submit" value="Buscar">
    </form>

    <br>

    <?php

    // Arreglo asociativo multidimensional
    $libros = [
        [
            "titulo" => "Programación en PHP",
            "autor" => "Juan Pérez",
            "categoria" => "Programación",
            "disponible" => "Sí"
        ],
        [
            "titulo" => "Fundamentos de Bases de Datos",
            "autor" => "Carlos López",
            "categoria" => "Base de Datos",
            "disponible" => "Sí"
        ],
        [
            "titulo" => "Redes de Computadoras",
            "autor" => "Ana Martínez",
            "categoria" => "Redes",
            "disponible" => "No"
        ],
        [
            "titulo" => "Programación Orientada a Objetos",
            "autor" => "Luis Hernández",
            "categoria" => "Programación",
            "disponible" => "Sí"
        ]
    ];

    // Comprobar si se realizó una búsqueda
    if (isset($_GET['buscar'])) {

        $buscar = $_GET['buscar'];
        $encontrado = false;

        // Recorrer el arreglo
        foreach ($libros as $libro) {

            // Buscar coincidencia en el título
            if (stripos($libro["titulo"], $buscar) !== false) {

                echo "<h3>Libro encontrado:</h3>";

                echo "Título: " . $libro["titulo"] . "<br>";
                echo "Autor: " . $libro["autor"] . "<br>";
                echo "Categoría: " . $libro["categoria"] . "<br>";
                echo "Disponible: " . $libro["disponible"] . "<br><br>";

                $encontrado = true;
            }
        }

        if (!$encontrado) {
            echo "<p>No se encontró ningún libro.</p>";
        }
    }

    ?>

</body>
</html>