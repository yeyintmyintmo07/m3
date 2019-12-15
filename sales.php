<?php include ('connection.php'); ?>
<!DOCTYPE html>
<html>
	<body>
		<div align="center">
			<form action="process.php?salesInput=1" method="post">
				<h1> Sales </h1>
				<table>
					<tr> 
						<td> Customer Name  </td> 
						<td>  
							<select name="customerId">
								<?php 									
									$result = mysqli_query($con,"SELECT * FROM customer");									
									while ($row = mysqli_fetch_array($result) ) {
										echo '<option value = "'.$row['id'].'">'.$row['customerName'].'</option>';
									}									
								?>
							</select>  
						</td>
					</tr>
					<tr> 
						<td> Item Name  </td> 
						<td>  
							<select name="itemId">
								<?php 
									$result = mysqli_query($con,"SELECT * FROM inventory");									
									while ($row = mysqli_fetch_array($result) ) {
										echo '<option value = "'.$row['id'].'">'.$row['itemName'].'</option>';
									}									
								?>
							</select>  
						</td>
					</tr>
					<tr> <td> Number of Item  </td> <td>  <input type="text" name="numberOfItem"/> </td> </tr>
					<tr> <td> Date of Purchase </td> <td>
                            <input type="text" name="dateOfPurchase" value="Leave empty for current time"
                                   onfocus="if (this.value==='Leave empty for current time') this.value='';"/>
                            </td> </tr>
				</table>
				<br>
				<input type="submit" value="Submit"/>
			</form>
		</div>
	</body>
</html>