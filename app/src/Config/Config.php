<?php

namespace App\Config;

class Config{

    private $config;

    public function __construct($path){

        $jsonConfig=file_get_contents($path);
        $this->config=json_decode($jsonConfig,true);

    }

    public function index(){

        return $this->config;

    }

    public function database($database){

        return $this->config['database'][$database];

    }

    public function app(){

        return $this->config['app'];

    }

    public function google($service){

        return $this->config['google'][$service];

    }
    
}

?>