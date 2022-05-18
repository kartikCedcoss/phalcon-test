<?php


use Phalcon\Mvc\Controller;


class TeacherController extends Controller
{ 
    public function indexAction()
    {
        $obj=new Teachers("Ashok", 40); //Note that the initial value will be changed by the code below.
        $obj->setName = "Sushma";     //The "name" property will be assigned successfully. If there is no __set() method, then the program will throw an exception.
        $obj->setSubject = 16; //The "reg" property will be assigned successfully.
        $obj->setAddress = 160; //160 is an invalid value, so it fails to be assigned.
        $obj->fun(); 
        $obj->save();
        die;

    }
    
    
   
}