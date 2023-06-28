<?php require 'inc/Header.php';?>
<body class="bg-light">
    <div class="container">
      <h1 class="text-center ">Add User</h1>
      <!-- Form --> 
      <?php 
             if (isset($sucees)) {
               echo '<h3 class="alert alert-success text-center">'.$sucees.'</h3>';
             }
              if (isset($error)) {
               echo '<h3 class="alert alert-danger text-center">'.$error.'</h3>';
             }?>
      <form method="POST" enctype="multipart/form-data" action="<?php echo(url('Register/store'))?>">
         <div class="form-outline mb-4">
            <label for="FirstName" class="form-label">First Name</label>
            <input type="text" name="FirstName" id="First Name" placeholder="Enter First Name " class="form-control" autocomplete="off">
         </div>
         <div class="form-outline mb-4">
            <label for="LastName" class="form-label">Last Name</label>
            <input type="text" name="LastName" id="Last Name" placeholder="Enter Last Name " class="form-control" autocomplete="off">
         </div>
         <!-- Email  -->
         <div class="form-outline mb-4">
            <label for="Email" class="form-label">Email</label>
            <input type="Email" name="Email" id="Email" placeholder="Enter  Email" class="form-control" autocomplete="off">
         </div>
         <div class="form-outline mb-4">
            <select class="form-control" name="Gander">
               <option>--Select a Gender--</option>
               <option value="male">male</option>
                <option value="fmale" >Fmale</option>
            </select>
         </div>
          <div class="form-outline mb-4">
            <select class="form-control" name="Rank">
               <option>--Select a Rank--</option>
               <option value="Student">Student</option>
                <option value="Reception" >Reception</option>
                <option value="Lecturer">Lecturer</option>
                <option value="Admin">Admin</option>
                <option value="SuperAdmin" >Super Admin</option>


            </select>
         </div>
         <!-- KeyWord -->
         <div class="form-outline mb-4">
            <label for="Password" class="form-label">Password</label>
            <input type="Password" name="Password" id="Password"placeholder= "Password" class="form-control" autocomplete="off" min="8">
         </div>
         <div class="form-outline mb-4">
            <label for="Password" class="form-label"> Confirm Password</label>
            <input type="Password" name="CPassword" id="Password"placeholder= " Retype Password" class="form-control" autocomplete="off" min="8">
         </div>
         
         
         <div class="form-outline mb-4">
         <button type="submit" name="submit" class="btn btn-info py-2 px-3 Border-0">Add User</button> 
            <p class=" fw-bold mt-2 pt-1 mb-0">Already Have an account ? <a href="<?php echo url('login')?>" class="text-danger">Login</a></p>
            </div>
      </form>
    </div>
</body>
</html>