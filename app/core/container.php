<?php

use Psr\Http\Message\ServerRequestInterface as Request;
use Psr\Http\Message\ResponseInterface as Response;

$app = new \Slim\App(['settings' => ['displayErrorDetails' => true,'responseChunkSize' => 8096]]);
//
$container=$app->getContainer();
//
$container['config']=function($container){

    return new App\Config\Config('../app/src/Config/Config.json');

};
//
$container['database']=function($container){

    return function($config){

        return App\Tools\DatabasePool::instanciate($config);

    };

};
//
$container['test']=function($container){

    return function($database){

        return new App\Modules\Test($database);

    };

};
//
$container['test-bis']=function($container){

    return function($database){

        return new App\Modules\TestBis($database);

    };

};
//
$container['socket']=function($container){

    return function($instance){

        return App\Tools\Socket::instanciate($instance);

    };

};



//uncoment to add optional dependencies

/*
$container['bigquery-parser']=function($container){

    return function($config){

        return App\Tools\BigQueryParser::instanciate($config);

    };

};
*/

?>