<?php

/**
 * Schools 
 */
class ClassesController
{
	
	public function index()
	{
		$Register=new Register();
		$Register->getClasses();
	}
	public function form()
	{
		VIEWS::load('classesadd');
	}
	public function add()
	{   
		$Register= new Register();

		  if (isset($_POST['submit'])) {
          
                $Register->Classes();   
           
     }
	}
		public function view($id)
	{   
		$Register= new Register();

          $Register->ViewClasses($id);

}
public function edit ($id) 
{
 	$Register= new Register();

		  if (isset($_POST['edit'])) {
          
                $Register->EditClasses();   
           
     } }
public function Delete($id)
{ 
	$Register= new Register();
  if (isset($_POST['Delete'])) {
                          $Register->DeleteClasses();   
           
     }
}


	
}



?>