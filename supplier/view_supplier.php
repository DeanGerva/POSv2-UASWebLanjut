<?php include('../server/connection.php');

	if(isset($_POST["id"])){  
		$output = '';  
	  	$query = "SELECT * FROM supplier WHERE supplier_id='".$_POST['id']."'";  
	  	$result = mysqli_query($db, $query);  

	  	while($row = mysqli_fetch_array($result)){
			echo "<div class='d-inline-flex  mt-2'>";
			echo "<img width='140' height='140' style='border:1px; border-radius:2px' src='../images/".$row['image']."'>";
			echo "</div>";
			$output .= '  
	  			<div class="table-responsive">  
		   		<table class="w-100">';   
		   	$output .= '
		   		<tr>  
					 <td width="50%"><label>Company Name :</label></td>  
					 <td width="50%"><strong>'.$row["company_name"].'</strong></td>  
				</tr>
		   		<tr>  
					 <td width="50%"><label>Name :</label></td>  
					 <td width="50%"><strong>'.$row["firstname"].'&nbsp'.$row["lastname"].'</strong></td>  
				</tr>		   		
				<tr>  
					 <td width="50%"><label>Address :</label></td>  
					 <td width="100%"><strong>'.$row["address"].'</strong></td>  
				</tr>

				<tr>  
					 <td width="50%"><label>Phone Number :</label></td>  
					 <td width="50%"><strong>'.$row["contact_number"].'</strong></td>  
				</tr>';  
	  }  
	  $output .= '  
		   </table>  
	  		</div>  
	  ';
	  echo $output;  
 	}  
?>
<!-- feature View Suppliers -->