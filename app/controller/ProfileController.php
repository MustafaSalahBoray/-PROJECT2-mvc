<?php

/**
 * 
 */
class ProfileController 
{
	
  public function index($id)
  {
  	   
        $Register= new Register();

          $Register->VIEWPROFILE($id);

}
  }


?>