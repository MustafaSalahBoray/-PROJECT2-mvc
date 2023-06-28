<?php 
 /**
  * Database
  */
 class DB
 {
   public $db;
   public function connect()
   {
    $dsn="mysql:host=".HOST.";dbname=".db_name;
   $db= $this->db=new PDO($dsn,db_user,db_pass);
   if ($db) {
       
   }
   else
   {
    echo "Errot";
   }
   return $db;

   

 }
   }


?>