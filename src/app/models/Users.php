<?php

use Phalcon\Mvc\Model;

class Users extends Model{

   public $id;

   public $city_id;

   public $name;

   public function initialize(){
       $this->belongsTo("city_id", "Apps\Common\Models\City", "id", array('alias' => 'City') );
   }
}