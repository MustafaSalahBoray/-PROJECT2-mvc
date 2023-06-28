 <?php require 'inc/Header.php';?>
<?php require 'inc/nav.php';?>
<div class="container-fluid p-4 shadow mx-auto ">
 <?php require 'inc/crumbs.php';?>
 </div>
  <style type="text/css">
   
}
  </style>
              <button  class=" btn btn-primary tex-center mt-2 mb-2 fa fa-plus"><a  class="btn btn-primary"href="<?php echo url('register/index')?>">add User</a ></button>
      <div class="row">
      <div class="col-md-10">
            <div class="row ">
                 <?php 
                    
                       foreach ($data as $key ) {?>
                <div class="col-md-4 mb-2">
                       <div class="card">
                          
                   
                     
            <img  style=" width: 100%;height: 100%;object-fit: contain; "src="http://localhost/PROJECTS%20MVC/PROJECT2/public/uploads/images/profile.jpeg" className="card-img-top" alt="mm"   />
            <div class="card-body">
              <h5 class="card-title"><?php echo $key['First_Name'].' '.$key['Last_Name']?></h5>
              <p class="card-text">
                   Rank:  <?php echo $key['Rank']?>
              </p>
                           <a href="<?php echo url('profile/index/'.$key['id'])?>" class="btn btn-primary"> Profile</a>
             
            </div> 
        </div> </div><?php  }?></div></div></div> 

              