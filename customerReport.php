<!DOCTYPE html>
<html>
  <style>
        td {
            padding: 10px;
        }
    </style>
	<body>
    <div align="center">
      <h1> Customer Report </h1>          
      <table class="report">
        <tr> <th> ID </th> <th> Customer Name </th> </tr>
        <?php      
          include ('connection.php');      
          $result = mysqli_query($con,"SELECT * FROM customer");
          while($row = mysqli_fetch_array($result)) {
            echo "<tr>";
            echo '<td>'.$row['id'].'</td>';
            echo '<td>'.$row['customerName'].'</td>';
            echo "</tr>";
          }      
        ?>
      </table>
    </div>
	</body>
</html>