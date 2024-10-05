<?php

namespace AEV1\Core;


use AEV1\Core\Interfaces\IRequest;
use AEV1\Core\Interfaces\IRoute;

class Dispatcher
{
    private $routeList;
    private IRequest $currentRequest;

    /**
     *  Para poder crear un objeto Dispatcher debemos enviar las rutas de la aplicación y la URI del navegador
     *  para que el dispatcher puéda redirigir al lugar controller correcto con los parámetros adecuados.
     * @param IRoute $routeCollection
     * @param IRequest $request
     */
    public function __construct(IRoute $routeCollection, IRequest $request) {
        $this->routeList = $routeCollection->getRoutes();
        $this->currentRequest = $request;
        $this->dispatch();
    }

    /**
     * Redirigimos la aplicación al controlador adecuado.
     */
    private function dispatch(): void {
        //Verificamos que la ruta que hemos recibido está dentro de las rutás de la aplicación
        if (isset($this->routeList[$this->currentRequest->getRoute()])) {

            $controllerClass = "AEV1\\Controllers\\" . $this->routeList[$this->currentRequest->getRoute()]["controller"];
            $controller = new $controllerClass;
            $action = $this->routeList[$this->currentRequest->getRoute()]["action"];
            //Comprobamos que se han enviado o no parámetros por la ruta y lanzamos la acción del controller
            if (!is_null($this->currentRequest->getParams())) {
                $controller->$action(...$this->currentRequest->getParams());
            } else {

                $controller->$action();
            }
        } else {
            echo "La ruta no esta definida";
        }
    }
}