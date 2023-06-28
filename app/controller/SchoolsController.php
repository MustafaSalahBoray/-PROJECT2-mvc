<?php

/**
 * Schools 
 */
class SchoolsController
{
	
	public function index()
	{
		$Register=new Register();
		$Register->getSchoole();
	}
	public function form()
	{
		VIEWS::load('schoolsadd');
	}
	public function add()
	{   
		$Register= new Register();

		  if (isset($_POST['submit'])) {
          
                $Register->Schoole();   
           
     }
	}
		public function view($id)
	{   
		$Register= new Register();

          $Register->ViewSchoole($id);

}
public function edit ($id) 
{
 	$Register= new Register();

		  if (isset($_POST['edit'])) {
          
                $Register->EditSchoole();   
           
     } }
public function Delete($id)
{ 
	$Register= new Register();
  if (isset($_POST['Delete'])) {
                          $Register->DeleteSchoole();   
           
     }
}


	
}



?>