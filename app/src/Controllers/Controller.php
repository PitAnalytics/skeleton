<?php

namespace App\Controllers;

use Psr\Container\ContainerInterface as Container;

abstract class Controller{

    protected $container;
    protected $config;
    protected $databases=[];
    protected $bigquery;
    protected $auth;

    public abstract function __construct(Container $container);

}

?>