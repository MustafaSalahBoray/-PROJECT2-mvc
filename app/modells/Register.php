<?php 
   /**
    * Databes Handeller
    */
   class Register extends DB
   {
   	
   	function __construct()
   	{
   		new DB();
   	}
   	public function addUser()
   	   
      {
         $password=password_hash($_POST['Password'], PASSWORD_DEFAULT);
       $addUser="INSERT INTO users(First_Name,Last_Name,Email,datee,Gender,Rank,Password 
) VALUES (:First_Name,:Last_Name,:Email,Now(),:Gender,:Rank,:Password)";
$stmt=$this->connect()->prepare($addUser);
$stmt->bindparam("First_Name",$_POST['FirstName']);
$stmt->bindparam("Last_Name",$_POST['LastName']);
$stmt->bindparam("Email",$_POST['Email']);
$stmt->bindparam("Gender",$_POST['Gander']);
$stmt->bindparam("Rank",$_POST['Rank']);
$stmt->bindparam("Password",$password);
if ($stmt->execute()) {
   
   echo "<script> window.open('".BURL."Home','_self')</script>";
}
else{
      $data['sucees']="Data Faild";
}


      VIEWS::load('register',$data);
   	}
      public function Login()
      {
         $SELECT="SELECT * FROM users WHERE Email=:Email AND Password=:Password";
         $stmt=$this->connect()->prepare($SELECT);
         $stmt->bindparam("Email",$_POST['Email']);
         $stmt->bindparam("Password",$_POST['Password']);
         $stmt->execute();
         if ($stmt->rowcount()==1) {
              $users=$stmt->fetchObject();
               session_start();
                $_SESSION['users']=$users;
                  echo "<script> window.open('".BURL."Home','_self')</script>";
               }
               else{
                     $data['error']="Data Faild";
               }
                 VIEWS::load('login',$data);

      }
      public function GetUser()
      {
         $SELECT="SELECT * FROM users WHERE Rank  not in ('Student')";
         $stmt=$this->connect()->prepare($SELECT);
         $stmt->execute();
         $stmt=$stmt->fetchAll(PDO::FETCH_ASSOC);
                  $data['data']=$stmt;
         VIEWS::load('staff',$data);

      } 
      public function Schoole()
      {
         $image=$_FILES['image']['name'];
       $imagetmp=$_FILES['image']['tmp_name'];
      $INSERT="INSERT INTO schools (school,data,Created_by,image,Adrees ) VALUES (:school,:data,Now(),:image,:Adrees )";
      $stmt=$this->connect()->prepare($INSERT);
      $stmt->bindparam("school",$_POST['Name']);
      $stmt->bindparam("data",$_POST['Date']);
   
      $stmt->bindparam("image",$image);
      $stmt->bindparam("Adrees",$_POST['Addrees']);
      if ($stmt->execute()) {
        $data['sucees']="Data is Inserted";
        move_uploaded_file($imagetmp,"uploads/images/$image");
      }
      else
      {
         $data['error']="Data is Faild";
      }
        VIEWS::load('schoolsadd',$data);
      }
      public function getSchoole()
      {
         $SELECT="SELECT * FROM schools ";
         $stmt=$this->connect()->prepare($SELECT);
         $stmt->execute();
         $stmt=$stmt->fetchAll(PDO::FETCH_ASSOC);
         $data['data']=$stmt;
         VIEWS::load('schools',$data);
      }
       public function ViewSchoole($id)
      {   
          $url= $_SERVER['REQUEST_URI']; 

              $id=trim($url,'/');
               $url=explode('/',$url);
               $id=$url[3];              

          $SELECT="SELECT * FROM schools WHERE id=:id ";
         
         $stmt=$this->connect()->prepare($SELECT);
         $stmt->bindparam("id",$id);
         $stmt->execute();
         $stmt=$stmt->fetchAll(PDO::FETCH_ASSOC);
         $data['stmt']=$stmt;
          VIEWS::load('schoolsedit',$data);
      }
      public function EditSchoole()
      {
                 
       $image=$_FILES['image']['name'];
        $imagetmp=$_FILES['image']['tmp_name']; 

        $UPDATE="UPDATE schools SET school=:school , data=:data, image=:image, Adrees=:Adrees,Created_by =NOW() WHERE id=:id";
        $stmt=$this->connect()->prepare($UPDATE);
      $stmt->bindparam("school",$_POST['Name']);
      $stmt->bindparam("data",$_POST['Date']);
   
      $stmt->bindparam("image",$image);
      $stmt->bindparam("Adrees",$_POST['Addrees']);
      $stmt->bindparam("id",$_POST['edit']);
      if ($stmt->execute()) {
        $data['sucees']="Data is UPDATE"; 
        echo "<script> window.open('".BURL."schools','_self')</script>";

        move_uploaded_file($imagetmp,"uploads/images/$image");
      }
      else
      {
         $data['error']="Data is Faild";
      }
        VIEWS::load('schoolsedit',$data);
       }  
       public function DeleteSchoole()
       {
        $DELETE="DELETE FROM schools WHERE id=:ID";
        $stmt=$this->connect()->prepare($DELETE);
        $stmt->bindparam("ID",$_POST['Delete']);
         if ($stmt->execute()) {
         echo "<script> window.open('".BURL."schools','_self')</script>";
                     

                     }
         
           
       }
         public function VIEWPROFILE($id)
         {
              $url= $_SERVER['REQUEST_URI']; 

              $id=trim($url,'/');
               $url=explode('/',$url);
               $id=$url[3];              

          $SELECT="SELECT * FROM users WHERE id=:id ";
         
         $stmt=$this->connect()->prepare($SELECT);
         $stmt->bindparam("id",$id);
         $stmt->execute();
         $stmt=$stmt->fetchAll(PDO::FETCH_ASSOC);
         $data['stmt']=$stmt;
          VIEWS::load('profile',$data);

         }
          public function GetStudent()
      {
         $SELECT="SELECT * FROM users WHERE Rank  in ('Student')";
         $stmt=$this->connect()->prepare($SELECT);
         $stmt->execute();
         $stmt=$stmt->fetchAll(PDO::FETCH_ASSOC);
                  $data['data']=$stmt;
         VIEWS::load('student',$data);

      } 
 public function Classes()
      {
         $image=$_FILES['image']['name'];
       $imagetmp=$_FILES['image']['tmp_name'];
      $INSERT="INSERT INTO classes (classes,data,Created_by,image,Adrees ) VALUES (:classes,:data,Now(),:image,:Adrees )";
      $stmt=$this->connect()->prepare($INSERT);
      $stmt->bindparam("classes",$_POST['Name']);
      $stmt->bindparam("data",$_POST['Date']);
   
      $stmt->bindparam("image",$image);
      $stmt->bindparam("Adrees",$_POST['Addrees']);
      if ($stmt->execute()) {
        $data['sucees']="Data is Inserted";
        move_uploaded_file($imagetmp,"uploads/images/$image");
      }
      else
      {
         $data['error']="Data is Faild";
      }
        VIEWS::load('classesadd',$data);
      }
      public function getClasses()
      {
         $SELECT="SELECT * FROM classes ";
         $stmt=$this->connect()->prepare($SELECT);
         $stmt->execute();
         $stmt=$stmt->fetchAll(PDO::FETCH_ASSOC);
         $data['stmt']=$stmt;
         VIEWS::load('classes',$data);
      }
       public function ViewClasses($id)
      {   
          $url= $_SERVER['REQUEST_URI']; 

              $id=trim($url,'/');
               $url=explode('/',$url);
               $id=$url[3];              

          $SELECT="SELECT * FROM classes WHERE id=:id ";
         
         $stmt=$this->connect()->prepare($SELECT);
         $stmt->bindparam("id",$id);
         $stmt->execute();
         $stmt=$stmt->fetchAll(PDO::FETCH_ASSOC);

         $data['data']=$stmt;
          VIEWS::load('classesedit',$data);
      }
      public function EditClasses()
      {
                 
       $image=$_FILES['image']['name'];
        $imagetmp=$_FILES['image']['tmp_name']; 

        $UPDATE="UPDATE classes SET classes=:classes , data=:data, image=:image, Adrees=:Adrees,Created_by =NOW() WHERE id=:id";
        $stmt=$this->connect()->prepare($UPDATE);
      $stmt->bindparam("classes",$_POST['Name']);
      $stmt->bindparam("data",$_POST['Date']);
   
      $stmt->bindparam("image",$image);
      $stmt->bindparam("Adrees",$_POST['Addrees']);
      $stmt->bindparam("id",$_POST['edit']);
      if ($stmt->execute()) {
        $data['sucees']="Data is UPDATE"; 
        echo "<script> window.open('".BURL."classes','_self')</script>";

        move_uploaded_file($imagetmp,"uploads/images/$image");
      }
      else
      {
         $data['error']="Data is Faild";
      }
        VIEWS::load('classesedit',$data);
       }  
       public function DeleteClasses()
       {
        $DELETE="DELETE FROM classes WHERE id=:ID";
        $stmt=$this->connect()->prepare($DELETE);
        $stmt->bindparam("ID",$_POST['Delete']);
         if ($stmt->execute()) {
         echo "<script> window.open('".BURL."classes','_self')</script>";
                     

                     }
         
           
       }
       
       }




?>