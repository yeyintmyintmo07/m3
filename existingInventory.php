<!DOCTYPE html>
<html>
	<body>
		<div align="center">
			<form action="process.php?existingInventoryInput=1" method="post">
				<h1> Stock Existing Product </h1>
				<table>
					<tr> 
						<td> Name </td> 
						<td> 
							<select name="itemId">
								<?php 
									include ('connection.php');      
									$result = mysqli_query($con,"SELECT * FROM inventory WHERE `itemType` LIKE 0");
									while ($row = mysqli_fetch_array($result) ) {
										echo '<option value = "'.$row['id'].'">'.$row['itemName'].'</option>';
									}									
								?>
							</select> 
						</td> 
					</tr>					
					<tr> <td> Number of Item </td> <td> <input type="text" name="numberOfItem"/> </td> </tr>					
				</table>
				<br>
				<input type="submit" value="Submit"/>
			</form>
		</div>
	</body>
</html>