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
$dbc=mysqli_connect("localhost","root","","psms");
if($dbc)
$query="SELECT * FROM sales ";
$q2=mysqli_query($dbc,$query);
#echo"<div style=\"text-align:center\">";
echo '<table border="1" cellspacing="4" cellpadding="12"><tr><th>Sales ID</th><th>Product ID</th><th>Name</th><th>Sales Date</th><th>Quantity Sold</th><th>Price</th><tr>';
while($row=mysqli_fetch_array($q2))
{
echo '<tr><td>'.$row[0].'</td>';
echo '<td>'.$row[1].'</td>';
echo '<td>'.$row[2].'</td>';
echo '<td>'.$row[3].'</td>';
echo '<td>'.$row[4].'</td>';
echo '<td>'.$row[5].'</td></tr>';
}
echo '</table>';
mysqli_close($dbc);
?>
</body>
</html>