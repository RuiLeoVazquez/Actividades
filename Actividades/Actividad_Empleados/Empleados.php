<!DOCTYPE html>
<html>
<head>
    <title>Eliminar Empleados</title>
</head>
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

<body>

    <cesar><h2>Lista de empleados</h2></cesar>

    <table border="1" cellpadding="8">
        <tr>
            <th>ID</th>
            <th>Nombre</th>
            <th>Puesto</th>
            <th>Acción</th>
        </tr>

        <tr>
            <cesar><td>1</td>
            <td>Olivia Galván</td>
            <td>Gerente</td>
            <td></cesar>
                <form method="POST"
                      onsubmit="return confirm('¿Está seguro de eliminar este registro?');">

                    <input type="hidden" name="id" value="1">
                    <input type="hidden" name="nombre" value="Olivia Galván">

                    <button type="submit" name="eliminar">
                        Eliminar
                    </button>
                </form>
            </td>
        </tr>

        <tr>
            <cesar><td>2</td>
            <td>César Hernández</td>
            <td>Supervisor</td>
            <td></cesar>
                <form method="POST"
                      onsubmit="return confirm('¿Está seguro de eliminar este registro?');">

                    <input type="hidden" name="id" value="2">
                    <input type="hidden" name="nombre" value="César Hernández">

                    <button type="submit" name="eliminar">
                        Eliminar
                    </button>
                </form>
            </td>
        </tr>
        <tr>
            <cesar><td>3</td>
            <td>Alan Abarca</td>
            <td>Checador</td>
            <td></cesar>
                <form method="POST"
                      onsubmit="return confirm('¿Está seguro de eliminar este registro?');">

                    <input type="hidden" name="id" value="3">
                    <input type="hidden" name="nombre" value="Alan Abarca">

                    <button type="submit" name="eliminar">
                        Eliminar
                    </button>
                </form>
            </td>
        </tr>
    </table>

    <br>

    <?php

    if (isset($_POST['eliminar'])) {

        $id = $_POST['id'];
        $nombre = $_POST['nombre'];

        // Simulación de eliminación
        echo "Registro eliminado correctamente.<br>";
        echo "ID: " . $id . "<br>";
        echo "Empleado: " . $nombre;
    }

    ?>

</body>
</html>