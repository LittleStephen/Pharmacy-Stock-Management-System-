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

#$query="SELECT FROM purchase(ProdID,Name,ProdType,BatchNo,Expiry,Quantity,Price,SuppID)  WHERE ProdID=purchase.ProdID";

$query="INSERT INTO inventory(Name,ProdType,Quantity,Price_Per_Unit) VALUES
(SELECT Name,ProdType,Quantity,Price FROM purchase)";
$q1=mysqli_query($dbc,$query);
# -->select records from inventory table
$query1="SELECT * FROM inventory";

$q2=mysqli_query($dbc,$query1);

echo '<table border="1" cellspacing="4" cellpadding="14"><tr><th>Name</th>
<th>Product Type</th><th>Quantity</th><th>Price(per unit)</th><tr>';
#if($res=$dbc->query($query)){
while($row=mysqli_fetch_array($q2))
{
echo '<tr><td>'.$row[0].'</td>';
echo '<td>'.$row[1].'</td>';
echo '<td>'.$row[2].'</td>';
echo '<td>'.$row[3].'</td></tr>';
}
#}
echo '</table>';
mysqli_close($dbc);
?>
</body>
</html>

