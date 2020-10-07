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
  
$result = mysqli_query($con,"SELECT * FROM Katsaus");  /* Changed from Tekija to Opiskelija -VS*/
echo "<table border='10'> 
<tr> 
<th>Nimi</th> 
<th>Kopio</th>
<th>Aluekoodi</th> 
<th>Konsoli</th> 
</tr>"; 
while($row = mysqli_fetch_array($result)) { 
echo "<tr>"; 
echo "<td>" . $row['Nimi'] . "</td>"; 
echo "<td>" . $row['Kopio'] . "</td>"; 
echo "<td>" . $row['Region'] . "</td>"; 
echo "<td>" . $row['Konsoli'] . "</td>"; 

echo "</tr>"; 
} 
echo "</table>"; 
  
mysqli_close($con); 