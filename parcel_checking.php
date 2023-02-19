<?php
require_once("includes/connection.php"); 

$s_user=$_GET['s_id'];

     $query2 =("SELECT * FROM delivery WHERE shipe_code='$u_user'");
     $result_set2 = mysqli_query($connection, $query2);
     
         if($result_set2){
             echo'<p style="color:green">Auto Searching... </p>';
             for($ii=1; $result2 = mysqli_fetch_array($result_set2); $ii++){
               echo('<a style="color:white" href="individual_parcel.php?s_id='.$result2['shipe_code'].'">'.$result2['shipe_code'].'</a><br/>');   
             }
         }
        else{
            echo('Name Not found '.mysql_error());
        }
         
?>

	

