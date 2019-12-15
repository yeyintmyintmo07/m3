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
            <table class="report" style="background-color:white; border: 1px solid gray; border-spacing: 20px; border-collapse: separate;">
                <tr> 
                    <th> ID </th> 
                    <th> Customer
                        ID </th>
                    <th> Customer
                        Name</th>
                    <th> Item ID </th>
                    <th> Item Name</th>
                    <th> Number
                        of Item </th>
                    <th> Date of
                        Purchase </th>
                </tr>
                <?php      
                    include ('connection.php');      
                    $result = mysqli_query($con,"SELECT * FROM sales");
                    while($row = mysqli_fetch_array($result)) {
                        $customerId = $row['customerId'];
                        $customerResult = mysqli_query($con,"SELECT * FROM customer WHERE `id` LIKE ('$customerId')");
                        $customerName = mysqli_fetch_array($customerResult)['customerName'];

                        $itemId = $row['itemId'];
                        $itemResult = mysqli_query($con,"SELECT * FROM inventory WHERE `id` LIKE ('$itemId')");
                        $itemName = mysqli_fetch_array($itemResult)['itemName'];
                    echo "<tr>";
                    echo '<td>'.$row['id'].'</td>';
                    echo '<td>'.$customerId.'</td>';
                    echo '<td>'.$customerName.'</td>';
                    echo '<td>'.$itemId.'</td>';
                    echo '<td>'.$itemName.'</td>';
                    echo '<td>'.$row['numberOfItemSales'].'</td>';
                    echo '<td>'.$row['dateOfPurchase'].'</td>';
                    echo "</tr>";
                    }      
                ?>
            </table>
        </div>
	</body>
</html>