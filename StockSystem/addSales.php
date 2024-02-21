<?php
if($_SERVER["REQUEST_METHOD"]=="POST"){
  //$a=$_POST['saleid'];
$b=$_POST['pid'];
$c=$_POST['name'];
//$b1=$_POST['power'];
$d=$_POST['saledate'];
$e=$_POST['quant'];
$f=$_POST['pri'];




  //if (empty($a)) {
    //echo "Please fill the field";
  //} 
  if (empty($b)) {
    echo "Please fill the field";
  } 
  if (empty($c)) {
    echo "Please fill the field";
  }
  if (empty($d)) {
    echo "Please fill the field";
  } 
  if (empty($e)) {
    echo "Please fill the field";
  } 

  
$dbc=mysqli_connect("localhost","root","","psms");
if($dbc){
    echo"DB connected";
$query="INSERT INTO sales(SaleID,ProdID,ProdName,SaleDate,QuantitySold,Price) VALUES(NULL,'$b','$c','$d','$e','$f')";
if(mysqli_query($dbc,$query)){
  $new="UPDATE inventory SET Quantity =Quantity -'$e' WHERE ProdName= '$c'";
mysqli_query($dbc,$new);
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