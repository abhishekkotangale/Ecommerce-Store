<?php

    session_start();

     if(!isset($_SESSION['username_u'])){
        header('location:../login_signup/login.php');
      }

?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Accept Request</title>
  </head>
  <body>






  <?php

    include '../assets/connection.php';


    $id = $_GET['update'];
    $showquery = "select * from user_items where orderid='$id' ";
    $showData = mysqli_query($con,$showquery);

    $result = mysqli_fetch_array($showData);


    $updatequery = "update user_items set status = 'Confirmed' where orderid='$id'";

        $query = mysqli_query($con,$updatequery);

        if($query){
            header('location:cart.php');
        }else{
            echo "not inserted";
        }

?>






    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

  </body>
</html>