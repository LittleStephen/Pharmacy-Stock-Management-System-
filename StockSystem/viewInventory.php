<html>
<head><h1><center>VIEW INVENTORY</center></h1></head>
<style>
        /* CSS to center-align the table */
        table {
            margin: 0 auto;
        }
        body
        { 
            background-image: url('phacem.jpg');
            background-repeat: no-repeat;
            background-size:cover;
            background-position: center;
        }
    </style>
</head>
<body>
<?php
$dbc=mysqli_connect("localhost","root","","psms");
if($dbc)
$query="SELECT * FROM purchase";
$q2=mysqli_query($dbc,$query);

echo '<table border="1" cellspacing="4" cellpadding="14"><tr><th>Name</th>
<th>Product Type</th><th>Quantity</th><th>Price(per unit)</th><tr>';

$sqlUpdateInventory = "UPDATE inventory SET inventory.Quantity = inventory.Quantity - sales.Quantity 
    WHERE inventory.ProdID = sales.ProdID";

    if ($dbc->query($sqlUpdateInventory) === TRUE) {
        echo "Inventory updated successfully.";
    } else {
        echo "Error updating inventory: " . $dbc->error;
    }
echo "</table>";
mysqli_close($dbc);
?>
</body>
</html>
