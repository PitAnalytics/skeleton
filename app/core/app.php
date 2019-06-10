<?php
/************************/
/*****PSR-7-INTERFACE****/
/************************/
use Psr\Http\Message\ServerRequestInterface as Request;
use Psr\Http\Message\ResponseInterface as Response;



$app = new \Slim\App([

    'settings' => [
        'displayErrorDetails' => true,
        'responseChunkSize' => 8096
    ]

]);

/*********************/
/******CONTAINER******/
/*********************/
require_once '../app/core/container.php';

/******************/
/****ROUTER********/
/******************/
$app->get('/', \App\Controllers\TestController::class.':wellcome');
$app->get('/test', \App\Controllers\TestController::class.':index');
$app->get('/config', \App\Controllers\TestController::class.':config');
//
$app->get('/bigquery/{query}', \App\Controllers\BigQueryController::class.':query');
//
/******************/
/****EJECUTAMOS****/
/******************/
$app->run();


?>