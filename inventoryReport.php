<!DOCTYPE html>
<html>
    <head>
        <style href="style.css"> </style>
    </head>
    <style> 
        td {
            padding: 10px;
        }
    </style>
	<body>
        <div align="center">
            <h1> Inventory Report </h1>          
            <table class="report" style="background-color:white; border: 1px solid gray; border-spacing: 20px; border-collapse: separate;">
                <tr> 
                    <th> ID </th> 
                    <th> Type </th> 
                    <th> Name </th> 
                    <th> Buying Price </th> 
                    <th> Selling Price </th> 
                    <th> Number </th> 
                </tr>
                <?php      
                    include ('connection.php');      
                    $result = mysqli_query($con,"SELECT * FROM inventory");
                    while($row = mysqli_fetch_array($result)) {
                        if ($row['itemType'] === '0'){
                            $itemType = 'Product';
                        } else {
                            $itemType = 'Service';
                        }

                        echo "<tr>";
                        echo '<td>'.$row['id'].'</td>';
                        echo '<td>'.$itemType.'</td>';
                        echo '<td>'.$row['itemName'].'</td>';
                        echo '<td>'.$row['buyPrice'].'</td>';
                        echo '<td>'.$row['sellPrice'].'</td>';
                        echo '<td>'.$row['numberOfItem'].'</td>';
                        echo "</tr>";
                    }      
                ?>
            </table>
        </div>
	</body>
</html>