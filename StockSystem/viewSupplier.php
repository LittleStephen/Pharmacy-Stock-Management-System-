<html>
<head><h1><center>VIEW SUPPLIERS</center></h1></head>
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
$query="SELECT * FROM supplier";
$q2=mysqli_query($dbc,$query);
echo '<table border="1" cellspacing="4" cellpadding="14"><tr><th>Supplier ID</th><th>Name</th><th>Email</th><th>Contact</th><th>Address</th><th>Company</th><tr>';
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