<!DOCTYPE html>
<html>
  <head>
    <style src="style.css"> </style>
  </head>
  <style>
    td {
        padding: 10px;
    }
  </style>
	<body>
    <div align="center">
      <h1> Balance Sheet </h1>          
      <table class="report" style="background-color:white; border: 1px solid gray; border-spacing: 20px; border-collapse: separate;">
      <tr> 
        <th> Customer Name </th> 
        <th> Item Name </th> 
        <th> Number of Item </th> 
        <th> Date of Purchase </th> 
        <th> Buy Price (Each)</th>
        <th> Sell Price (Each)</th>
        <th> Profit (Total)</th>
      </tr>
      <?php      
          include ('connection.php');
          $result = mysqli_query($con,"SELECT * FROM sales 
                                      INNER JOIN customer 
                                        ON sales.customerId = customer.id
                                      INNER JOIN inventory
                                        ON sales.itemId = inventory.id");
          while($row = mysqli_fetch_array($result)) {
              $numberOfItemSales = $row['numberOfItemSales'];
              $buyPrice = $row['buyPrice'];
              $sellPrice = $row['sellPrice'];
              $profit = $sellPrice-$buyPrice;
              $profit = $profit * $numberOfItemSales;
            echo "<tr>";
            echo '<td>'.$row['customerName'].'</td>';
            echo '<td>'.$row['itemName'].'</td>';
            echo '<td>'.$numberOfItemSales.'</td>';
            echo '<td>'.$row['dateOfPurchase'].'</td>';
            echo '<td>'.$buyPrice.'</td>';
            echo '<td>'.$sellPrice.'</td>';
            echo '<td>'.$profit.'</td>';
            echo "</tr>";
          }      
      ?>
      </table>
    </div>
	</body>
</html>