<?php

namespace App\Controllers;

use Psr\Container\ContainerInterface as Container;

class TestController extends Controller{
    
    private $test;

    public function __construct(Container $container){

        $this->container=$container;
        $this->config=$this->container['config'];
        $this->database=$this->container['database']($this->config->database('test'));
        $this->test=$this->container['test']($this->database);

    }

    public function wellcome($request,$response,$args){

        echo('wellcome');

    }

    public function config($request,$response,$args){

        $config=$this->config->index();

        $response1 = $response->withJson($config,201);
        $response2 = $response1
        ->withHeader('Access-Control-Allow-Origin', '*')
        ->withHeader('Access-Control-Allow-Methods', 'GET, POST, PUT, DELETE, PATCH, OPTIONS');

        return $response2;

    }

    public function index($request,$response,$args){

        $index = $this->test->index();

        $response1 = $response->withJson($index,201);
        $response2 = $response1
        ->withHeader('Access-Control-Allow-Origin', '*')
        ->withHeader('Access-Control-Allow-Methods', 'GET, POST, PUT, DELETE, PATCH, OPTIONS');

        return $response2;
        
    }

}

?>