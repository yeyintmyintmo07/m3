<?php
    
include ('connection.php');

// User Input
if (!empty($_GET['customerInput'])){    
  $customerName = $_POST['customerName'];
  mysqli_query($con, "INSERT INTO `customer` (`customerName`) VALUES ('$customerName')");
  header('Location: customer.php');
}

// New Inventory Input
if (!empty($_GET['newInventoryInput'])){    
  $itemName = $_POST['itemName'];
  $itemType = $_POST['itemType'];
  $buyPrice = $_POST['buyPrice'];
  $sellPrice = $_POST['sellPrice'];
  mysqli_query($con, "INSERT INTO `inventory` (`itemName`,`itemType`,`buyPrice`,`sellPrice`) VALUES ('$itemName','$itemType','$buyPrice','$sellPrice')");
  header('Location: newInventory.php');
}

// New Existing Inventory Input
if (!empty($_GET['existingInventoryInput'])){    
  $itemName = $_POST['itemName'];
  $numberOfItem = $_POST['numberOfItem'];
  mysqli_query($con, "UPDATE inventory SET numberOfItem = numberOfItem + '$numberOfItem' WHERE `itemName` = '$itemName'");
  header('Location: existingInventory.php');
}

// Sales Input
if (!empty($_GET['salesInput'])){    
  $customerName = $_POST['customerName'];
  $customerId = $customerName;
  $itemName = $_POST['itemName'];
  $itemId = $itemName;
  $numberOfItem = $_POST['numberOfItem'];
  $dateOfPurchase = $_POST['dateOfPurchase'];
  mysqli_query($con, "INSERT INTO `sales` (`customerId`,`itemId`,`numberOfItem`,`dateOfPurchase`) VALUES ('$customerId','$itemId','$numberOfItem','$dateOfPurchase')");
    mysqli_query($con, "UPDATE inventory SET numberOfItem = numberOfItem - '$numberOfItem' WHERE `itemName` = '$itemName'");
  header('Location: sales.php');
}


?>