<?php

namespace App\Controllers;

use Psr\Container\ContainerInterface as Container;

class BigQueryController extends Controller{
    
    public function __construct(Container $container){

        //container instance by dependency injection
        $this->container=$container;

        //config by default
        $this->config=$this->container['config'];
        $this->bigquery=$this->container['bigquery']($this->config->google('bigquery'));

    }

    public function query($request,$response,$args){

        //pedimos query via argumentos en url
        $result = $this->bigquery->query($args['query']);

        //imprimimos resultado como json con cabeceras
        $response1 = $response->withJson($result,201);
        $response2 = $response1
        ->withHeader('Access-Control-Allow-Origin', '*')
        ->withHeader('Access-Control-Allow-Methods', 'GET, POST, PUT, DELETE, PATCH, OPTIONS');

        //imprimimos respuesta al retornarla
        return $response2;

    }

}

?>