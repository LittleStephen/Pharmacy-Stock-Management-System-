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
$query="INSERT INTO inventory(ProdID,Name,ProdType,BatchNo,Expiry,Quantity,Price,SuppID) SELECT ProdID,Name,ProdType,BatchNo,Expiry,
Quantity,Price,SuppID FROM purchase WHERE ProdID=purchase.ProdID";
$q2=mysqli_query($dbc,$query);
echo '<table border="1" cellspacing="4" cellpadding="14"><tr><th>Product ID</th><th>Name</th>
<th>Product Type</th><th>Batch No</th><th>ExpiryDate</th><th>Quantity</th><th>Price</th><th>Supplier ID</th><tr>';

if ($dbc->query($query) === true) {
    while($row=mysqli_fetch_array($q2)){
    echo '<tr><td>'.$row[0].'</td>';     
    echo '<td>'.$row[1].'</td>';
    echo '<td>'.$row[2].'</td>';
    echo '<td>'.$row[3].'</td>';
    echo '<td>'.$row[4].'</td>';
    echo '<td>'.$row[5].'</td>';
    echo '<td>'.$row[6].'</td>';
    echo '<td>'.$row[7].'</td></tr>';
    }
}
     else {
    echo "Error inserting record into Purchase table: " . $dbc->error;
}

echo "</table>";
mysqli_close($dbc);
?>
</body>
</html>

