<html>
<head><h1><center>VIEW PURCHASE</center></h1></head>
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
$query="SELECT * FROM purchase"; #ORDER BY ProdID asc
$q2=mysqli_query($dbc,$query);
echo '<table border="1" cellspacing="4" cellpadding="14"><tr><th>Purchase ID</th><th>Product ID</th><th>Name</th><th>Product Power</th><th>Product Type</th><th>Quantity</th><th>ExpiryDate</th><th>Manufacture Date</th><th>Batch No</th><th>Supplier ID</th><th>Price</th><th>Purchase Date</th><tr>';
while($row=mysqli_fetch_array($q2))
{
echo '<tr><td>'.$row[0].'</td>';
echo '<td>'.$row[1].'</td>';
echo '<td>'.$row[2].'</td>';
echo '<td>'.$row[3].'</td>';
echo '<td>'.$row[4].'</td>';
echo '<td>'.$row[5].'</td>';
echo '<td>'.$row[6].'</td>';
echo '<td>'.$row[7].'</td>';
echo '<td>'.$row[8].'</td>';
echo '<td>'.$row[9].'</td>';
echo '<td>'.$row[10].'</td>';
echo '<td>'.$row[11].'</td></tr>';
}
echo "</table>";
mysqli_close($dbc);
?>
</body>
</html>