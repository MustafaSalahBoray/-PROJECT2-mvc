<?php 
   /**
    * 
    */
   class LoginController  
   {
   	 public function index()
  	 {
  	 
         VIEWS::load('login');
   

  	 }
    public function Test()
    {
      if (isset($_POST['submit'])) {
         $Register=new Register();
          
          $Register->Login();
      }
   	
   }
    }



?>