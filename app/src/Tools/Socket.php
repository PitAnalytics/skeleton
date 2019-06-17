<?php

namespace App\Tools;

use ElephantIO\Client;
use ElephantIO\Engine\SocketIO\Version2X as Engine;

class Socket extends Client{

  //pool de instancias singleton
  protected static $instances=[];

  //funcion que devuelve instancias clasificadas
  public static function instanciate(array $instances){

    //obtenemos llave y settings de instancia
    $key=key($instances);
    $settings=current($instances);

    //en caso de no existir la instancia especificada se crea una nueva instancia especifica
    if (!isset(self::$instances[$key])){

      self::$instances[$key] = new self(new Engine($settings));
     
    }
    //retornamos la instancia pedida
    return self::$instances[$key];

  }
  
}

?>