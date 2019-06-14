<?php
//
namespace App\Modules;
//
use App\Primitives\Connection as Connection;
use App\Interfaces\TableInterface as TableInterface;
//
class TestBis extends Connection implements TableInterface{
    
    public function index(){

        return $this->database->select('Fruits',['id','fruit']);

    }
    public function get($id){

       return $this->database->get('Fruits',['id','fruit']);

    }

}

?>