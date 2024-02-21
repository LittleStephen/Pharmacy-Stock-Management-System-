<?php
if($_SERVER["REQUEST_METHOD"]=="POST"){
$a=$_POST['start'];
$b=$_POST['end'];



  
$dbc=mysqli_connect("localhost","root","","psms");
if($dbc){
    echo"DB connected";
$query="INSERT INTO salereport(SaleID,ProdID,ProdName,SaleDate,QuantitySold,Price) VALUES(NULL,'$b','$c','$d','$e','$f')";
if(mysqli_query($dbc,$query)){
echo "Record inserted";

}
else{
echo "Record not inserted";
echo "Error: " . $query." " . mysqli_error($dbc);
}
}
mysqli_close($dbc);
}
?>