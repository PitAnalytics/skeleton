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

    public function validate($table,$fields,$register){

        $_register=$this->get($table,[$fields['identity'],$fields['password']],[$fields['identity']=>$register['identity']]);

        if(!isset($_register[$fields['identity']])){

            return -1;

        }
        else{

            if($register['password']===$_register['password']){

                return 1;

            }else{

                return 0;

            }

        }

    }
    
}


?>