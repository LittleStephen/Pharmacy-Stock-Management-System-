
<html>
<head><h1><center>Inventory</center></h1></head>
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
$query  = "SELECT addproducts.ProdID,addproducts.Name,addproducts.BatchNo,addproducts.ExpiryDate, addsupplier.Name,addsupplier.Contact,addsupplier.Company FROM addproducts CROSS JOIN addsupplier ON addproducts.ProdID=addsupplier.ProdID";
$q2=mysqli_query($dbc,$query);
echo '<table border="1" cellspacing="4" cellpadding="14"><tr><th>Product ID</th><th>Product Name</th><th>Product Batch</th><th>Product Expiry Date</th><th>Supplier Name</th><th>Supplier Contact</th><th>Supplier Company</th><tr>';

if($q2){
    echo"<em>The products available in the paharmacy are listed below.</em> <br><br><br>";
}

else{
    echo "Error: " . $query." " . mysqli_error($dbc);
}
    #$rowcount=mysqli_num_rows($q2); echo "$rowcount is the count"; if($rowcount){
    while($row=mysqli_fetch_array($q2))
    {
        #$a=$row['id'];
        #$b=$row['name'];
        #$c=$row['batchno'];
        #$d=$row['exp'];
        #$e=$row['name'];
        #$f=$row['contact'];
        #$g=$row['company'];  echo '<tr><td>'.$row[0].'</td>';

        echo '<tr><td>'.$row['0'].'</td>';
        echo '<td>'.$row['1'].'</td>';
        echo '<td>'.$row['2'].'</td>';
        echo '<td>'.$row['3'].'</td>';
        echo '<td>'.$row['4'].'</td>';
        echo '<td>'.$row['5'].'</td>';
        echo '<td>'.$row['6'].'</td></tr>';
        #echo ("<tr><td></td>
        #<td>$b</td>
        #<td>$c</td>
        ##<td>$d</td>
        #<td>$e</td>
        #<td>$f</td>
        #<td>$g</td>
        #</tr> ");
    }


echo "</table>";
#}
mysqli_close($dbc);
?>
</body>
</html>