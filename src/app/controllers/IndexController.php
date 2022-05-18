<?php


use Phalcon\Mvc\Controller;


class IndexController extends Controller
{ 
public function indexAction(){
    $obj = new Students();
    $obj->setName('Ram');     
    $obj->setAddress('33, Vishwash Khand, GomtiNagar Lucknow'); 
    $obj->setRollNo(60);
    echo $obj->setAddress;
    echo "<br>";
    echo $obj->setName;
    echo "<br>";
    echo $obj->setRollNo;
    die;
}
public function getAction(){
    $obj = new Students();
    $obj->load(15);
    echo $obj->getName();
    die;
}

   public function updateAction(){
     $obj = new Teachers();
     $obj->load(1);
     $obj->updateName("seema");
     die;
   }

    public function insertAction()
    {    
        $obj=new Students(); 
        $obj->setName('Ram');     
        $obj->setAddress('33, Vishwash Khand, GomtiNagar Lucknow'); 
        $obj->setRollNo(60);
        $data=$obj->add();
   
    }
    public function deleteAction()
    {
         $obj = new Students();
         $data = $obj->load(12);
         $delete = $data->delete();
        
       die;

    }
   
    
   
}
