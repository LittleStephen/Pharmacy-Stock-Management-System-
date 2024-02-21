<html>
<head><h1><center>VIEW PRODUCT</center></h1></head>
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
$dbc=mysqli_connect("localhost","root","","StockSystem");
if($dbc)
$query="SELECT * FROM addProducts order by ID asc";
$q2=mysqli_query($dbc,$query);
echo '<table border="1" cellspacing="4" cellpadding="14"><tr><th>ID</th><th>Name</th><th>Quantity</th><th>Expiry Date</th><th>Price</th><th>BatchNo</th><th>ManufactureDate</th><tr>';
while($row=mysqli_fetch_array($q2))
{
echo '<tr><td>'.$row[0].'</td>';
echo '<td>'.$row[1].'</td>';
echo '<td>'.$row[2].'</td>';
echo '<td>'.$row[3].'</td>';
echo '<td>'.$row[4].'</td>';
echo '<td>'.$row[5].'</td>';
echo '<td>'.$row[6].'</td></tr>';
}
echo "</table>";
mysqli_close($dbc);
?>
</body>
</html>