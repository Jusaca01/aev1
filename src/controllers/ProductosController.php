<?php

namespace AEV1\Controllers;

use AEV1\core\DataBase;
use AEV1\models\EmpresaDB;
use AEV1\views\Productos;

/**
 * Controlador para la ruta /detalle
 */
class ProductosController
{
    public function product($id = null): void {
        if (is_null($id)) {
            //Hemos recibido un nulo por id, por lo tanto le enviamos también nulo para que no se muestren datos.
            $data = null;
        } else {
            //Creamos una conexión a la BB.DD. e instanciamos el modelo Tarea para poder acceder a los datos.
            $productos = new EmpresaDB(new DataBase());
            //Ahora recibimos todos los datos que existan con la id solicitada, si no existen la vista lo procesa.
            $data = $productos->findAllProducts();
            echo "test";
        }
        $view = new Productos($data);
    }
}