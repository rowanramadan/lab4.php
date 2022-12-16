
<?php
//select==get from to TABLE
$dbhost = 'localhost';
$dbuser = 'root';
$dbpass = '';
$db ='demo';
$conn = mysqli_connect($dbhost, $dbuser, $dbpass);

if(! $conn ) {
   die('Could not connect: ' . mysqli_error($conn));
}

echo 'Connected successfully<br>';

$sql = 'SELECT id, name,email, gender FROM userform';
mysqli_select_db($conn,$db);
$result = mysqli_query($conn,$sql );

if(! $result ) {
   die('Could not get data: ' . mysqli_error($conn));
}


if (mysqli_num_rows($result) > 0) {
   // output data of each row

   // echo "<table>";
//    while($row = mysqli_fetch_assoc($result)) {
//       echo "ID :{$row['id']}  <br> ".
//       " NAME : {$row['name']} <br> ".
//       "email : {$row['email']} <br> ".
//       "gender : {$row['gender']} <br> ".
//       "--------------------------------<br>";
    }
//    // echo "</table>";

//  } else {
//    echo "0 results";
//  }
 /* //Its a good practice to release cursor memory
 mysqli_free_result($result);
 */
echo "Fetched data successfully\n";
mysqli_select_db($conn,$db);
$sql="select* from userform;";
$result = mysqli_query($conn,$sql );

if(! $result ) {
   die('Could not insert: ' . mysqli_error($conn));
}
?>
<table>
<thead> 
<tr>


<th>id</th>
<th>name</th>
<th>email</th>
<th>gender</th>
<th>mail</th>
<th>action</th>
</tr>
</thead>



<?php
while ($row = mysqli_fetch_assoc($result)){?>

  

       <td><?php echo $row['Id']?></td>
       <td><?php echo $row['name']?></td>
       <td><?php echo $row['email']?></td>
       <td><?php echo $row['gender']?></td>
       <td><?php echo $row['mail status']?'yes':'no'?></td>
</tr>
<?php

}?>
</tbody>
</tfoot>
</table>
<?php
// echo 'data inserted<br>';
mysqli_close($conn);
?>






