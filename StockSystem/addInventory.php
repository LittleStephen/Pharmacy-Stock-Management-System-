<?php
if($_SERVER["REQUEST_METHOD"]=="POST"){
$a=$_POST['pname'];
$b=$_POST['pdesc'];
$c=$_POST['scount'];


$dbc=mysqli_connect("localhost","root","","stocksystem");
if($dbc){
    echo"DB connected";
$query="INSERT INTO inventory(Prod_Type,Product_Description,Stock_Count) VALUES( '$a','$b','$c')";
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