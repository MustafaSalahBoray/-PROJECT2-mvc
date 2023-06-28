<?php require 'inc/Header.php';?>
<body class="bg-light">
    <div class="container mt-5">
      <h1 class="text-center ">Login </h1>
      <!-- Form --> 
       <?php 
             if (isset($sucees)) {
               echo '<h3 class="alert alert-success text-center">'.$sucees.'</h3>';
             }
              if (isset($error)) {
               echo '<h3 class="alert alert-danger text-center">'.$error.'</h3>';
             }?>
      <form method="POST" enctype="multipart/form-data" action="<?php echo url('Login/Test')?>">
         <div class="form-outline mb-4">
            <label for="Email" class="form-label">Email</label>
            <input type="text" name="Email" id="Email" placeholder="Enter Email " class="form-control" autocomplete="off">
         </div>
          <div class="form-outline mb-4">
            <label for="Password" class="form-label">Password</label>
            <input type="Password" name="Password" id="Password" placeholder="Enter Password " class="form-control" autocomplete="off">
         </div>
         
      
         <div class="form-outline mb-4">
         <button type="submit" name="submit" class="btn btn-info py-2 px-3 Border-0">Login</button> 
           
            </div>
      </form>
    </div>
</body>
</html>