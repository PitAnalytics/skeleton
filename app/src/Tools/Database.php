<?php
/*
* encapsulamiento de singleton para la clase Medoo con capacidad extensible
*/
namespace App\Tools;

use Medoo\Medoo as Medoo;
use Medoo\Raw as Raw;

class Database extends Medoo{

    protected static $instance;

    public static function instanciate(array $options){

        if (!self::$instance instanceof self){

            self::$instance = new self($options);
   
        }

       return self::$instance;

    }

    public function __construct(array $options){

        parent::__construct($options);

    }
    
}


?>