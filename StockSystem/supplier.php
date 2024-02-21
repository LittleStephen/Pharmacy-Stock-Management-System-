<html>
<head><h1><center>VIEW SUPPLIER</center></h1></head>
<style>
        /* CSS to center-align the table */
        table {
            margin: 0 auto;
        }
        body
        { 
            background-image: url('01-Medical-Background-HD-Light-Blue-Hexagons-by-SlidesCorner.com_-1.jpg');
        }
    </style>
</head>
<body>
<?php
if($_SERVER["REQUEST_METHOD"]=="POST"){
//$a1=$_POST['pid'];
$a=$_POST['id'];
$b=$_POST['name'];
$c=$_POST['email'];
$d=$_POST['contact'];
$e=$_POST['address'];
$f=$_POST['company'];

//if (empty($a1)) {
  //  echo "ProductID is required";
  //} 
  if (empty($a)) {
    echo "ID is required";
  } 
  if (empty($b)) {
    echo "Name is required";
  } 
  if (empty($c)) {
    echo "Email is required";
  } 
  if (empty($d)) {
    echo "Contact is required";
  } 
  if (empty($e)) {
    echo "Address is required";
  } 
  if (empty($f)) {
    echo "Company is required";
  } 
  


$dbc=mysqli_connect("localhost","root","","psms");
if($dbc){
    echo"DB connected";
$query="INSERT INTO supplier(SupID,SupName,Mail,Contact,Address,Company) VALUES ('$a','$b','$c','$d','$e','$f')";
if(mysqli_query($dbc,$query)){
echo "Record inserted";
}
else{ 
echo "Error: " . $query." " . mysqli_error($dbc);
}

}
mysqli_close($dbc);
}
?>
</body>
</html>
