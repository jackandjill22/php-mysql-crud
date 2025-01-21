<?php include 'db_con.php'; ?>

<?php
        if(isset($_POST["Product_name"]) && isset($_POST["Product_description"]) && isset($_POST["stocks"])){

            $name = $_POST["Product_name"];
            $description = $_POST["Product_description"];
            $stocks = $_POST["stocks"];
            $id = $_POST["productid"];

        $conn = connectdb();
        $sql = "Update products set 
        product_name='".$name."',
        product_description='".$description."',
        stocks = ".$stocks." where product_id=".$id."";

        if ($conn->query($sql) === TRUE) {
        echo "Record update successfully";
        } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
        }

        $conn->close();
        }
        
    ?>

    <a href="index.php">Go Back Home</a>