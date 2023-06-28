<?php
/**
 * Viewsto require all files
 */
class Views
{
	
	 public static function load($views_name,$views_data=[])
	 {
	 	$file=VIEWS.$views_name.'.view.php';
	  
	 	if (file_exists($file)) {
	 		extract($views_data);
	 		ob_start();
	 		require $file;
	 		ob_flush();
	 		
	 	}
	 	else
	 	{
	 		echo " File Dosent Exist".$views_name;
	 	}
	 }
}  


?>