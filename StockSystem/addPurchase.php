<?php
if($_SERVER["REQUEST_METHOD"]=="POST"){
//$a=$_POST['purid'];
$b=$_POST['id'];
$c=$_POST['name'];
$d=$_POST['power'];
$e=$_POST['ptype'];
$f=$_POST['quant'];
$g=$_POST['exp'];
$h=$_POST['manu'];
$i=$_POST['batchno'];
$j=$_POST['supid'];
$k=$_POST['pri'];
$l=$_POST['purdate'];

 
$dbc=mysqli_connect("localhost","root","","psms");
if($dbc){
    echo"DB connected";
$query="INSERT INTO purchase(PurID,ProdID,Name,Power,ProdType,Quantity,Expiry,Manufacture,BatchNo,SuppID,Price,PurDate) VALUES(NULL,'$b','$c','$d','$e','$f','$g','$h','$i','$j','$k','$l')";
if(mysqli_query($dbc,$query)){
  $new="UPDATE inventory SET Quantity =Quantity +'$f' WHERE Name= '$c'";
mysqli_query($dbc,$new);
echo "Record inserted";
//$update_products_sql = "UPDATE addproducts SET Quantity = Quantity + '$g' WHERE Name = '$b'";
//$dbc->query($update_product_counts_sql);

//$check_product_count_sql = "SELECT * FROM addproducts WHERE Name = '$b'";
  //      $result = $dbc->query($check_product_count_sql);

    //    if ($result->num_rows > 0) {
            // If the product exists, update the count in the product_counts table
       //     $update_product_counts_sql = "UPDATE addproducts SET Quantity = Quantity + '$g' WHERE Name = '$b'";
     //       $dbc->query($update_product_counts_sql);
        //}

}
else{
echo "Record not inserted";
echo "Error: " . $query." " . mysqli_error($dbc);
}
//$update_products_sql = "UPDATE addproduct SET Quantity = Quantity + '$g' WHERE Name = '$b'";
}
mysqli_close($dbc);
}
?>