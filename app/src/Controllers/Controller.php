<?php

namespace App\Controllers;

use Psr\Container\ContainerInterface as Container;

abstract class Controller{

    //instancias de contenedor y contenedor
    protected $container;
    protected $config;
    protected $databases=[];
    protected $sockets=[];
    protected $bigquery;
    protected $auth;
    protected $modules=[];

    public abstract function __construct(Container $container);

}

?>