
<?php

// creating the connection
require_once('connection.php');
$sql="USE xwan3;";
//Check database connection 
if ($conn->query($sql) === TRUE) {
	print "<br>connection success!";
} else {
   echo "Error using  database: " . $conn->error;
}

//Create Query:

$Strain=$_POST['Strain'];
$Gender=$_POST['Gender'];
$Age=$_POST['Age'];


if(!empty($Strain)&!empty($Gender))
 {
	$sql_select = "SELECT * FROM Current_cages Where Strain_name='$Strain' and Gender='$Gender'";

    $result = $conn->query($sql_select);

    if ($result->num_rows > 0) {
    
 	?>
 	<table class="table table-striped">
		
 		<tr>
 			<th>Cage_id</th>
 			<th>Stain_name</th>
 			<th>Gender</th>
 			<th>Birth_date</th>
 			<th>Current_amount</th>
 			<th>Breeder</th>
 			<th>Parent</th>
 			<th>Entry_date</th>
 			<th>End_date</th>
  		<tr>
 		<?php 			
 			while($row = $result->fetch_assoc()) {
 			?>
      	 <tr>
         	  <td><?php echo $row['Cage_id']?></td>
         	  <td><?php echo $row['Stain_name']?></td>
         	  <td><?php echo $row['Gender']?></td>
         	  <td><?php echo $row['Birth_date']?></td>
         	  <td><?php echo $row['Current_amount']?></td>
         	  <td><?php echo $row['Breeder']?></td>
          	  <td><?php echo $row['Parent']?></td>
          	  <td><?php echo $row['Entry_date']?></td>
          	 <td><?php echo $row['End_date']?></td>
       	 </tr>

		<?php
}
}
else {
echo "No result";
}
?>

 	</table>
<?php
 $conn->close();
?>

