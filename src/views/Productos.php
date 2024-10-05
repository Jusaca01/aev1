<?php

namespace AEV1\Views;


class Productos
{
    public function __construct(array $row = null) {
        /*if (is_null($row)) {
            //No hemos recibido nada por lo que debemos indicarlo.
            echo "No se han recibido datos para mostrar en la vista del Listado";
            echo "<p><a href='/'>volver</p>";
        } else {
            //Verificamos que hemos recibido contenido para rellenar la tabla y si no hemos recibido nada lo indicaremos.
            if (count($row) > 0) {
                echo "<table border='1'>";
                echo "<tr><td>Id</td><td>Título</td><td>Descripción</td><td>Fecha de Creación</td><td>Fecha de Vencimiento</td><td></td></tr>";
                echo "<tr><td>" . $row["id"] .
                    "<td>" . $row["titulo"] . "<td>" . $row["descripcion"] .
                    "<td>" . $row["fecha_creacion"] .
                    "<td>" . $row["fecha_vencimiento"] .
                    "<td><a href='/'>volver</td></tr>";
                echo "</table>";
            } else {
                echo "0 results";
                echo "<p><a href='/'>volver</p>";
            }
        }
*/

    }

}