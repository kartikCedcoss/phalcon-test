<?php 

use Phalcon\Mvc\Model;

class ResourceModel extends Model {
       public	$primaryKey = 'id';
       public	$connection = false;
      
       public function __set($property, $value)
       {  
          $this->$property = $value;
         if($this->table == "student"){
          
         }
         if($this->table == "teacher"){
          
        }
       }
       public function __get( $property){
          
           if($property == "setRollNo"){
            $roll_no = $this->setRollNo;
           $data = $this->findFirstByroll_no($roll_no);
           echo $data->name;
           }
       }
      
       public function load($value){
          if($this->table == 'student'){
          $data = $this->findFirstByroll_no($value); 
          $this->setRollNo = $value;
          }
        if($this->table == "teacher")   {
            $data = $this->findFirstByid($value);
            $this->setId = $value;
            
        }
        return $data;
        	}

            public function add(){
                if($this->table=='student'){
                $name = $this->setName;
                $addr = $this->setAddress;
                 $student = $this->assign([
                  'name'=>$name,
                  'address'=>$addr,
                  ]);
                $success = $student->save();
            }
            if($this->table=='teacher'){
                $name = $this->setName;
                $addr = $this->setAddress;
                $subject = $this->setSubject;
                 $student = $this->assign([
                  'name'=>$name,
                  'address'=>$addr,
                  'subject'=>$subject
                  ]);
                $success = $student->save();
            }
            
            }
            public function  updateName($name){
                if($this->table == 'student'){
                $roll_no = $this->setRollNo;
                $data = $this->findFirstByroll_no($roll_no);
                 $data->name = $name;
                 $success = $data->save();
                 if($success){
                     return true;
                 }
                }
                if($this->table == 'teacher'){
                    $id = $this->setId;
                    $data = $this->findFirstByid($id);
                     $data->name = $name;
                     $success = $data->save();
                     if($success){
                         return true;
                     }
                    }
                }
            public function getName(){
                if($this->table == 'student'){
                $roll_no = $this->setRollNo;
                $data = $this->findFirstByroll_no($roll_no); 
               return $data->name;
            }
            if($this->table == 'teacher'){
                $id = $this->setId;
                $data = $this->findFirstByid($id); 
               return $data->name;
            }
         }

        	public function update():bool{
        	}

    
    public function fun()
    {
        echo "My name is ".$this->setName.",My registration number is ".$this->setAddress,"dsfsdfsd".$this->setRollNo;
    }
}
 

?>