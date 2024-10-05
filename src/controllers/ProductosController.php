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
    public function product(): void {

        $productos = new EmpresaDB(new DataBase());
        $data = $productos->findAllProducts();
        $view = new Productos($data);
    }
}