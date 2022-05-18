<?php
Class Teachers extends ResourceModel {
	public $table = 'teacher';
	public $primaryKey = 'id';
	public $connection = false;
    public function setId($id){
        $this->setId = $id;
      }
      public function setName($name){
          $this->setName = $name;
        }
        public function setAddress($add){
          $this->setAddress = $add;
        }
        public function setSubject($sub){
            $this->setSubject = $sub;
          }
    
	
}