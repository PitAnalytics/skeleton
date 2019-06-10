<?php

namespace App\Controllers;

use Psr\Container\ContainerInterface as Container;

class BigQueryController extends Controller{
    
    protected $bigquery;

    public function __construct(Container $container){

        $this->container=$container;
        $this->config=$this->container['config'];
        $this->bigquery=$this->container['bigquery']($this->config->google('bigquery'));

    }

    public function query($request,$response,$args){


        $result = $this->bigquery->query($args['query']);

        $response1 = $response->withJson($result,201);
        $response2 = $response1
        ->withHeader('Access-Control-Allow-Origin', '*')
        ->withHeader('Access-Control-Allow-Methods', 'GET, POST, PUT, DELETE, PATCH, OPTIONS');

        return $response2;

    }

    public function config($request,$response,$args){

        $config=$this->config->index();

        $response1 = $response->withJson($config,201);
        $response2 = $response1
        ->withHeader('Access-Control-Allow-Origin', '*')
        ->withHeader('Access-Control-Allow-Methods', 'GET, POST, PUT, DELETE, PATCH, OPTIONS');

        return $response2;

    }


}

?>