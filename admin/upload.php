<?php

    session_start();

     if(!isset($_SESSION['username'])){
        header('location:../login_signup/adminlogin.php');
      }

?>

<?php

    include '../assets/connection.php';

    if(isset($_POST['submit'])){
        $productName = $_POST['productName'];
        $productDesc = $_POST['productDesc'];
        $cost = $_POST['cost'];
        $file = $_FILES['file'];

        $filename = $file['name'];
        $filepath = $file['tmp_name'];
        $fileerror = $file['error'];

        if($fileerror == 0){
            $destfile = '../upload/'.$filename;

            move_uploaded_file($filepath,$destfile);

            $insertquery = "insert into product(product_name,product_desc,cost,pic) values('$productName','$productDesc','$cost','$destfile')";

            $query = mysqli_query($con,$insertquery);

            if($query){
                echo "inserted";
                header('location:addproduct.php');
            }else{
                echo "not inserted";
            }
        }
    }

?>