<?php

//namespace in modules
namespace App\Modules;

//
use App\Primitives\Proxy as Proxy;

//
class Test extends Proxy{
    
    public function get(string $base, string $body){

        $url=$base.$body;

        $request = new Request();

        return (array) $response;

    }

    public function post(string $base, string $body,array $payload){



    }

}

?>