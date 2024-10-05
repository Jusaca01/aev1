<?php

namespace AEV1\Views;


class Productos
{
    public function __construct(array $rows = null) {
        if (is_null($rows)) {
            echo "No se han recibido datos para mostrar en la vista del Listado";
            echo "<p><a href='/'>volver</p>";
        } else {
            if (count($rows) > 0) {
                echo "<link rel='stylesheet' type='text/css' href='/assets/styles.css'>";
                echo "<table>";
                echo "<tr><td id='categoria'>Producto</td></tr>";
                foreach ($rows as $row) {
                    echo "<tr><td>" . $row["DESCRIPCION"] . "</td> </tr>";
                }
                echo "</table>";
                echo "<p><a href='/'>Volver</a></p>";
            } else {
                echo "0 results";
                echo "<p><a href='/'>volver</p>";
            }
        }


    }

}