<?php
use Phalcon\Mvc\Model;
Class Students extends ResourceModel {
	public $table = 'student';
	public $primaryKey = 'roll_no';
	public $connection = false;
 
public function setRollNo($roll){
  $this->setRollNo = $roll;
}
public function setName($name){
    $this->setName = $name;
  }
  public function setAddress($add){
    $this->setAddress = $add;
  }
  
}