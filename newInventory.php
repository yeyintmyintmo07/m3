<!DOCTYPE html>
<html>
	<body>
		<div align="center">
			<form action="process.php?newInventoryInput=1" method="post">
				<h1> Add New Product </h1>
				<table>
					<tr> <td> Product Name </td> <td> <input type="text" name="itemName"/> </td> </tr>
					<tr> 
						<td> Type </td> 
						<td> 
							<select name="itemType">
								<option value="0">Goods</option>
								<option value="1">Service</option>
							</select> 
						</td> 
					</tr>
					<tr> <td> Buy Price </td> <td> <input type="text" name="buyPrice"/> </td> </tr>
					<tr> <td> Sell Price </td> <td> <input type="text" name="sellPrice"/> </td> </tr>
				</table>
				<br>
				<input type="submit" value="Submit"/>
			</form>
		</div>
	</body>
</html>