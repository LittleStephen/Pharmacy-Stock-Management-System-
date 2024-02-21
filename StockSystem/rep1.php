<!DOCTYPE html>
<html>
<head>
 
    <style>
        .table-container {
            margin: 20px;
        }

        .data-table {
            border-collapse: collapse;
            width: 100%;
        }

        .data-table th, .data-table td {
            border: 1px solid #ccc;
            padding: 8px;
            text-align: left;
        }

        .data-table th {
            background-color: #f2f2f2;
        }
    </style>
</head>
<body>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $start_date = $_POST['start_date'];
    $end_date = $_POST['end_date'];
    $conn = mysqli_connect("localhost", "root", "", "stocksystem");
    if ($conn->connect_error) {
        echo"Error";
        die("Connection failed: " . $conn->connect_error);
    }
    else{
        echo" DB connected";
    }

    $sql = "SELECT ProdID,Name,BatchNo FROM addproducts WHERE Date BETWEEN '$start_date' AND '$end_date'";
    $result = mysqli_query($conn,$sql);
    echo "<center><h1>PSMS</h1></center>";
        echo "<div class='table-container'>";
        echo "<table class='data-table'><tr><th>ID</th><th>Name</th><th>Batch No</th></tr>";
    
    $rowc="SELECT COUNT(Name) FROM addproducts";
    echo $rowc;
    if($rowc>0) {
    
        while($row=mysqli_fetch_array($result)) {
            echo "<tr><td>".$row["id"]."</td><td>".$row["name"]."</td><td>".$row["batchno"]."</td></tr>";
        }
        echo "</table>";
        echo "</div>";
    } 
    
    mysqli_close($conn);

}
#$a="SELECT * from itr where TaxToPay;
#if($a<=500000)
#{
#$amt=4000;
#echo"The amount gain for filing is",$amt;
#}
#else if($a>500000 and $a<1000000)
#$amt=6000;
#echo"The amount gain for filing is",$amt;
#}
#}
#else
#$amt=7000;echo"The amount gain for filing is",$amt;
#}

?>

</body>
</html>