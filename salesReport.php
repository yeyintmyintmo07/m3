<!DOCTYPE html>
<html>
    <style>
        td {
            padding: 10px;
        }
    </style>
	<body>
        <div align="center">
            <h1> Sales Report </h1>          
            <table class="report">
                <tr> 
                    <th> ID </th> 
                    <th> Customer ID </th> 
                    <th> Item ID </th> 
                    <th> Number of Item </th> 
                    <th> Date of Purchase </th> 
                </tr>
                <?php      
                    include ('connection.php');      
                    $result = mysqli_query($con,"SELECT * FROM sales");
                    while($row = mysqli_fetch_array($result)) {
                    echo "<tr>";
                    echo '<td>'.$row['id'].'</td>';
                    echo '<td>'.$row['customerId'].'</td>';
                    echo '<td>'.$row['itemId'].'</td>';
                    echo '<td>'.$row['numberOfItem'].'</td>';
                    echo '<td>'.$row['dateOfPurchase'].'</td>';
                    echo "</tr>";
                    }      
                ?>
            </table>
        </div>
	</body>
</html>