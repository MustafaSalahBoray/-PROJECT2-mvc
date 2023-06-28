<?php 

/***
 * 
 * */
 class RegisterController
 {
 	public function index()
 	{
 		VIEWS::load('register');
 	}
    public function store()
    {
        $Register=new Register();
        if (isset($_POST['submit'])) {
            if (isset($_POST['Password'])==isset($_POST['CPassword'])) {
                $Register->addUser();   
              }
              else{
                echo '<h3 class="alert alert-danger text-center">Password Is wrong</h3>';
              }  
            
        }
        
    }
 }

?>