<?php

namespace AEV1\Views;

class Main
{
    public function __construct() {
        echo "<link rel='stylesheet' type='text/css' href='/assets/styles.css'>";
        echo "<h1>ACTIVIDAD EVALUABLE 1</h1>";
        echo "<img src='/assets/space_balls.png' alt='space bowls'>";
        echo "<div id='buttons'>
                <p><a href='/productos/'>Productos</a></p>
                <p><a href='/clientes/'>Clientes</a></p>
            </div>";

    }


    /* public function __construct(array $rows = null) {
         if (is_null($rows)) {
             //No hemos recibido nada por lo que debemos indicarlo.
             echo "No se han recibido datos para mostrar en la vista de Detalle";
             echo "<p><a href='/'>volver</p>";
         } else {
             //Verificamos que hemos recibido contenido para rellenar la tabla y si no hemos recibido nada lo indicaremos.
             if (count($rows) > 0) {
                 echo "<table border='1'>";
                 echo "<tr><td>Título</td><td>Descripción</td><td>Fecha de Creación</td><td>Fecha de Vencimiento</td></tr>";
                 foreach ($rows as $row) {
                     echo "<tr><td><a href='/detalle/" . $row["id"] . "'>" . $row["titulo"] .
                         "</a><td>" . $row["descripcion"] . "</td><td>" . $row["fecha_creacion"] . "</td><td>" . $row["fecha_vencimiento"] . "</td></tr>";
                 }
                 echo "</table>";
             } else {
                 echo "0 results";
                 echo "<p><a href='/'>volver</p>";
             }
         }
     }*/

}