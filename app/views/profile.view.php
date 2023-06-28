<?php require 'inc/Header.php';?>
<?php require 'inc/nav.php';  

?> 
<body>
  <div class="container-fluid p-4 shadow mx-auto mt-5" style="max-width: 1000px;">
     <?php require 'inc/crumbs.php';?>
     <div class="row">
      <?php foreach ($stmt as $key ) {
        ?>
      
        <div class="col-4">
   <img  style=" width: 100%;height: 100%;object-fit: contain; "src="http://localhost/PROJECTS%20MVC/PROJECT2/public/uploads/images/profile.jpeg" className="card-img-top" alt="mm"   />
           <h3 class="text-center mt-2 mb-2"><?php echo $key['First_Name'].$key['Last_Name']?></h3>
        </div>
        <div class="col-8 bg-light p-2">
           <table class="table table-hover table-striped table-border">
              <tr><th>First Name</th><td><?php echo $key['First_Name']?></td></tr>
              <tr><th>Last Name</th><td><?php echo $key['Last_Name']?> </td></tr>
              <tr><th>Gender</th><td><?php echo $key['Gender']?> </td></tr>
                <tr><th>Rank</th><td><?php echo $key['Rank']?> </td></tr>
              <tr><th>Date Created </th><td><?php echo $key['datee']?></td></tr>
           </table>
        </div>
     <?php }?>
     </div>
     <hr>
       <!--  <div class="container-fluid">
           <ul class="nav nav-tabs">
              <li class="nav-item">
                 <a hr ef="" class="nav-link active">Basic Info</a>
              </li>
              <li class="nav-item">
                 <a href="" class="nav-link ">Classes</a>
              </li>
              <li class="nav-item">
                 <a href="" class="nav-link disabled">Test</a>
              </li>
           </ul>
           <nav class="navbar navbar-light bg-light">
             <form class="from-inline">
                <div class="input-group">
                  <div class="input-group-prepend">
                     
                    <span class="input-group-text">@</span>
                    <input type="text" name=""class="form-control" placeholder="Username">
                  </div> 
                </div>
             </form> 
           </nav>
        </div> -->
  </div> 
</body>
</html>