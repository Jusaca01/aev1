<?php

namespace AEV1\Models;

use AEV1\Core\Interfaces\IDataBase;

class EmpresaDB
{
    //En vez de usar la clase DataBase usamos la interfaz, de forma que podemos cambiar de motor de BB.DD. y cumpliendo
    //con la interfaz siempre funcionará el modelo.
    private IDataBase $database;

    public function __construct(IDataBase $database) {
        $this->database = $database;
    }

    /**
     * Función que nos devuelve todos los registros de la tabla Tarea
     */
    public function findAllProducts() {
        $sql = "SELECT DESCRIPCION FROM PRODUCTO";
        return $this->database->executeSQL($sql);
    }

    /**
     * Función que nos devuelve el contenido de una tarea para su id
     */
    /*    public function findById($id) {
            $sql = "SELECT * FROM tareas WHERE id=$id";
            $result = $this->database->executeSQL($sql);
            return array_shift($result);
        }*/
}