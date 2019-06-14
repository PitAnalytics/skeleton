<?php
/************************/
/*****PSR-7-INTERFACE****/
/************************/
use Psr\Http\Message\ServerRequestInterface as Request;
use Psr\Http\Message\ResponseInterface as Response;

/************************/
/*****SLIM-INSTANCE******/
/************************/
$app = new \Slim\App([

    'settings' => [
        'displayErrorDetails' => true,
        'responseChunkSize' => 8096
    ]

]);
//
/*********************/
/******CONTAINER******/
/*********************/
require_once '../app/core/container.php';
//
/******************/
/****ROUTER********/
/******************/
//
$app->get('/', \App\Controllers\TestController::class.':wellcome');
$app->get('/test', \App\Controllers\TestController::class.':index');
$app->get('/config', \App\Controllers\TestController::class.':config');
$app->get('/test-bis', \App\Controllers\TestController::class.':indexBis');
$app->get('/test-dual', \App\Controllers\TestController::class.':indexDual');
//
//opcionales
//$app->get('/bigquery/{query}', \App\Controllers\BigQueryController::class.':query');
//
/******************/
/****EJECUTAMOS****/
/******************/
$app->run();

?>