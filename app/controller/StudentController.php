<?php 
 /**
  * Student
  */
 class StudentController
 {
 	
 	public function index ()
 	{
   $Register=new Register();
   $Register->GetStudent();
 	}
 }

?>