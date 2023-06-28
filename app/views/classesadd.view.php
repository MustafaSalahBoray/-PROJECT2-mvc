<!DOCTYPE html>
<html>
<head>
		 <?php require 'inc/Header.php';?>
<?php require 'inc/nav.php';?>
<div class="container-fluid p-4 shadow mx-auto ">
 <?php require 'inc/crumbs.php';?>
</head>
<body>
  <div class="container">
      <h1 class="text-center ">Add Schoole</h1>
      <!-- Form --> 
      <?php 
             if (isset($sucees)) {
               echo '<h3 class="alert alert-success text-center">'.$sucees.'</h3>';
             }
              if (isset($error)) {
               echo '<h3 class="alert alert-danger text-center">'.$error.'</h3>';
             }?>
      <form method="POST" enctype="multipart/form-data" action="<?php echo(url('classes/add'))?>">
         <div class="form-outline mb-4">
            <label for="Name" class="form-label"> Name</label>
            <input type="text" name="Name" id="Name" placeholder="Enter  Name of the schoole" class="form-control" autocomplete="off">
         </div>
        
         <!-- Email  -->
         <div class="form-outline mb-4">
            <label for="Addrees" class="form-label">Addrees</label>
            <input type="text" name="Addrees" id="Addrees" placeholder="Enter  Addrees" class="form-control" autocomplete="off">
         </div>
       
          
          
         <!-- KeyWord -->
         <div class="form-outline mb-4">
            <label for="Password" class="form-label">Date for Creation</label>
            <input type="Date" name="Date" placeholder= "Date " class="form-control" autocomplete="off" >
         </div>
         <div class="form-outline mb-4">
            <label for="Password" class="form-label"> image</label>
            <input type="file" name="image"  class="form-control" autocomplete="off" >
         </div>
         
         
         <div class="form-outline mb-4">
         <button type="submit" name="submit" class="btn btn-primary py-2 px-3 Border-0 float-end">submit</button> 
             <a href="<?php echo url('classes')?>" class="text-light btn btn-warning">Cancel</a>
            </div>
      </form>
    </div>

</body>
</html>