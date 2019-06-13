<?php

namespace App\Primitives;

use GuzzleHttp\ClientInterface as ClientInterface;

class Proxy{

    protected $guzzle;

    public function __construct(ClientInterface $guzzle){

        $this->guzzle=$guzzle;

    }
    
}

?>