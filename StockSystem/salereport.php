
<html>
<head><h1><center>VIEW SALES</center></h1></head>
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
<head>
<body>
<?php
if($_SERVER["REQUEST_METHOD"]=="POST"){
    $a=$_POST['date'];
$dbc=mysqli_connect("localhost","root","","psms");
if($dbc)
$query="SELECT ProdName,QuantitySold,Price FROM sales WHERE SaleDate='$a' ORDER BY ProdName";
$q2=mysqli_query($dbc,$query);
#echo"<div style=\"text-align:center\">";
echo '<table border="1" cellspacing="4" cellpadding="12"><tr><th>Name</th><th>Quantity Sold</th><th>Price</th><tr>';
while($row=mysqli_fetch_array($q2))
{
echo '<tr><td>'.$row[0].'</td>';
echo '<td>'.$row[1].'</td>';
echo '<td>'.$row[2].'</td></tr>';
}
echo '</table><br>';
echo '<br><br><br>';
$query1="SELECT SUM(Price) FROM sales WHERE SaleDate='$a'";
$q3=mysqli_query($dbc,$query1);
echo '<table border="1" cellspacing="4" cellpadding="12"><tr><th>Total Amount</th></tr>';
while($row1=mysqli_fetch_array($q3)){
    echo '<tr><td>'.$row1[0].'</td></tr>';
}
echo '</table>';
mysqli_close($dbc);
}
?>
</body>
</html>