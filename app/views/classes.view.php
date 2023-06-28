<!DOCTYPE html>
<html>
<head>
	 <?php require 'inc/Header.php';?>
<?php require 'inc/nav.php';?>
<div class="container-fluid p-4 shadow mx-auto ">
 <?php require 'inc/crumbs.php';?>
 <style type="text/css">
   img{
    width: 100px;
    height: 100px;
    object-fit: contain;
   }
 </style>
</head>
<body>
<table class="table table-primary table-hover">
  <thead style="text-align:center;">
    <tr>
      <th scope="col">Classes</th>
      <th scope="col">image</th>
      <th scope="col">Created by</th>
      <th scope="col">Date</th>
      <th scope="col"></th>
      <th scope="col" class="fa fa-plus"><a  class="btn btn-primary"href="<?php echo url('classes/form')?>">add New</a ></th>
     
    </tr>
  </thead>
  <tbody style="text-align: center;background-color:#eee;color: black;">
    <tr>
    	   <?php foreach ($stmt as $key ){ ?>
           
        
    	
      <th scope="row"> <?php echo $key['classes'];?></th>
      <td><img src="http://localhost/PROJECTS%20MVC/PROJECT2/public/uploads/images/<?=$key['image'];?>"></td>
      <td> <?php echo $key['Created_by'];?></td>
      <td> <?php echo $key['data'];?></td>
      <td>
        <form method="POST" action="classes/Delete">
             <a class="btn btn-primary" href="<?php echo url('classes/view/'.$key['id'])?>">Edit</a>
           <button  type="submit" name ="Delete" value="<?php echo $key['id'];?>"class="btn btn-danger">Delete</button>
        </form>
       </td>
    </tr>
    <?php } ?>
  </tbody>
</table></div>
</body>
</html>