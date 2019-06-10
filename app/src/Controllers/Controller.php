<?php

namespace App\Controllers;

use Psr\Container\ContainerInterface as Container;

abstract class Controller{

    protected $container;
    protected $config;
    protected $database;
    protected $bigquery;

    public abstract function __construct(Container $container);

}

?>