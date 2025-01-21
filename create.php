<?php
   include 'db_con.php';
   connectDB();
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
    <H1>Create</H1>
    <a href="index.php">Home</a>

    <form action="create.php" method="post">

        <label for="">Product Name</label><br>
        <input type="text" name="Product_name"><br><br>

        <label for="">Product Description</label><br>
        <input type="text" name="Product_description"><br><br>

        <label for="">Stocks</label><br>
        <input type="number" name="stocks"><br><br>

        <input type="submit" value="Submit" class="btn btn-primary">

    </form>

    </div>
    

    <?php
        if(isset($_POST["Product_name"]) && isset($_POST["Product_description"]) && isset($_POST["stocks"])){
            $name = $_POST["Product_name"];
            $description = $_POST["Product_description"];
            $stocks = $_POST["stocks"];


        $conn = connectdb();
        $sql = "INSERT INTO products (product_name, product_description, stocks)
        VALUES ('".$name."','".$description."','".$stocks."')";

        if ($conn->query($sql) === TRUE) {
        echo "New record created successfully";
        } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
        }

        $conn->close();
        }
        
    ?>
    

</body>
</html>