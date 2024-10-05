<?php

namespace AEV1\Models;

use AEV1\Core\Interfaces\IDataBase;

class EmpresaDB
{

    private IDataBase $database;

    public function __construct(IDataBase $database) {
        $this->database = $database;
    }


    public function findAllProducts() {

        $sql = "SELECT DESCRIPCION FROM PRODUCTO";

        return $this->database->executeSQL($sql);
    }


}