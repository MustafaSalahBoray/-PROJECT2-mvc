<?php

/**
 * Staff 
 */
class StaffController
{
	
	public function index()
	{
		VIEWS::load('staff');
	}
	public function GetUser()
	{ 
		$Register=new Register();
		$Register->GetUser();
		 
	}
}



?>