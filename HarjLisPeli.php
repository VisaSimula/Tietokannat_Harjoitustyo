<?php 
 $host='localhost'; 
 $dbname='t9sivi02'; 
 $username='t9sivi02'; 
 $password=''; 
  
 $con=mysqli_connect($host,$username,$password,$dbname); 
  
 if (mysqli_connect_errno()) 
 { 
  echo "Yhteys epäonnistui" . mysqli_connect_error(); 
 } 
  
 $nimi=mysqli_real_escape_string($con, 
  filter_input(INPUT_POST,'pnimi',FILTER_SANITIZE_STRING)); 
 $region=mysqli_real_escape_string($con, 
  filter_input(INPUT_POST,'pregion',FILTER_SANITIZE_STRING)); 
 $hinta=mysqli_real_escape_string($con,filter_input(INPUT_POST,'phinta',FILTER_SANITIZE_STRING));
 $konsoli=mysqli_real_escape_string($con,filter_input(INPUT_POST,'pkonsoli',FILTER_SANITIZE_STRING));
 $kopio=mysqli_real_escape_string($con,filter_input(INPUT_POST,'pkopio',FILTER_SANITIZE_STRING));
  
 $sql="CALL lisaa_Peli('$nimi','$region','$hinta','$konsoli','$kopio')";
 
 if (!mysqli_query($con, $sql)){ 
  die('Error: ' . mysqli_error($con)); 
 } 
 echo "Completed"; 
 mysqli_close($con); 
