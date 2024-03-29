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
  $itemId = $_POST['itemId'];
  $numberOfItemSales = $_POST['numberOfItemSales'];
  mysqli_query($con, "UPDATE inventory SET numberOfItem = numberOfItemSales + '$numberOfItemSales' WHERE `id` = '$itemId'");
  header('Location: existingInventory.php');
}

// Sales Input
if (!empty($_GET['salesInput'])){    
  $customerId = $_POST['customerId'];
  $itemId = $_POST['itemId'];
  $numberOfItemSales = $_POST['numberOfItemSales'];
  $dateOfPurchase = $_POST['dateOfPurchase'];
  if($dateOfPurchase==="" || $dateOfPurchase==="Leave empty for current time"){
      $dateOfPurchase = new DateTime();
      $dateOfPurchase = $dateOfPurchase->format('Y-m-d H:i:s');}
  mysqli_query($con, "INSERT INTO `sales` (`customerId`,`itemId`,`numberOfItemSales`,`dateOfPurchase`) VALUES ('$customerId','$itemId','$numberOfItemSales','$dateOfPurchase')");
    mysqli_query($con, "UPDATE inventory SET numberOfItem = numberOfItem - '$numberOfItemSales' WHERE `id` = '$itemId'");
  header('Location: sales.php');
}


