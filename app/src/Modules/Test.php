<?php
//
namespace App\Modules;
//
use App\Primitives\Connection as Connection;
use App\Interfaces\TableInterface as TableInterface;
//
class Test extends Connection implements TableInterface{
    
    public function index(){

        return $this->database->select('Number',['id','word']);

    }

    public function get($id){

       return $this->database->get('Number',['id','word']);

    }

}

?>