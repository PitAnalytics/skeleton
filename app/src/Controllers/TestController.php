<?php

namespace App\Controllers;

use Psr\Container\ContainerInterface as Container;

class TestController extends Controller{
    
    private $test;
    private $test1;

    public function __construct(Container $container){

        $this->container=$container;
        $this->config=$this->container['config'];
        $this->databases['test']=$this->container['database'](['test'=>$this->config->database('test')]);
        $this->databases['test-bis']=$this->container['database'](['test-bis'=>$this->config->database('test-bis')]);
        $this->test=$this->container['test']($this->databases['test']);
        $this->test1=$this->container['test-bis']($this->databases['test-bis']);

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

    public function indexBis($request,$response,$args){

        $index = $this->test1->index();

        $response1 = $response->withJson($index,201);
        $response2 = $response1
        ->withHeader('Access-Control-Allow-Origin', '*')
        ->withHeader('Access-Control-Allow-Methods', 'GET, POST, PUT, DELETE, PATCH, OPTIONS');

        return $response2;
        
    }

    public function indexDual($request,$response,$args){

        $index = [0=>['numbers'=>$this->test->index()],1=>['fruits'=>$this->test1->index()]];

        $response1 = $response->withJson($index,201);
        $response2 = $response1
        ->withHeader('Access-Control-Allow-Origin', '*')
        ->withHeader('Access-Control-Allow-Methods', 'GET, POST, PUT, DELETE, PATCH, OPTIONS');

        return $response2;
        
    }
}

?>