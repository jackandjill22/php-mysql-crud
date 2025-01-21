<?php
   include 'db_con.php';
   connectDB();
?>

<?php

$product_name_="";
$productdescription_= "";
$stocks_ = "";


        if (isset($_GET["id"])) {

        $sql = "SELECT * FROM products WHERE product_id=".$_GET["id"];

        $conn = connectDB();
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
        // output data of each row
        while($row = $result->fetch_assoc()) {
           $product_name_ = $row["product_name"];
           $productdescription_ = $row["product_description"];
           $stocks_ = $row["stocks"];
        }
        } else {
        echo "0 results";
        }
        $conn->close();

        }
        
    ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">

    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>


</head>
<body>

  


    <div class="container">
    <H1>Update</H1>
    

    <form action="updateprocess.php" method="post">

        <input type="hidden" name="productid" value="<?php echo $_GET["id"]; ?>"><br><br>

        <label for="">Product Name</label><br>
        <input type="text" name="Product_name" value="<?php echo $product_name_; ?>"><br><br>

        <label for="">Product Description</label><br>
        <input type="text" name="Product_description" value="<?php echo $productdescription_; ?>"><br><br>

        <label for="">Stocks</label><br>
        <input type="number" name="stocks" value="<?php echo $stocks_; ?>"><br><br>

        <input type="submit" value="Submit" class="btn btn-primary">

        <a href="index.php" class="btn btn-danger">Cancel</a>

    </form>

    </div>
    


    

</body>
</html>