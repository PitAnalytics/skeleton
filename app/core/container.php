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

        return App\Tools\Database::instanciate($config);

    };

};
//
$container['test']=function($container){

    return function($database){

        return new App\Modules\Test($database);

    };

};

//uncoment to add optional dependencies

/*
$container['bigquery']=function($container){

    return function($config){

        return App\Tools\BigQueryParser::instanciate($config);

    };

};
*/

//
$container['guzzle']=function(){

    return function($settings){

        return new GuzzleHttp\Client($settings);

    };

};

?>