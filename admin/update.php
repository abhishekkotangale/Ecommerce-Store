<?php

    session_start();

     if(!isset($_SESSION['username'])){
        header('location:../login_signup/adminlogin.php');
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
    <title>Add Image</title>
  </head>
  <body>






  <?php

include '../assets/connection.php';


    $id = $_GET['update'];
    $showquery = "select * from product where id='$id' ";
    $showData = mysqli_query($con,$showquery);

    $result = mysqli_fetch_array($showData);


if(isset($_POST['submit'])){
    
    $product_name = $_POST['product_name'];
    $product_desc = $_POST['product_desc'];
    $cost = $_POST['cost'];
    $file = $_FILES['file'];

    $filename = $file['name'];
    $filepath = $file['tmp_name'];
    $fileerror = $file['error'];

    if($fileerror == 0){
        $destfile = '../upload/'.$filename;

        move_uploaded_file($filepath,$destfile);

        

        

        $updatequery = "update product set product_name='$product_name',product_desc='$product_desc', cost='$cost', pic = '$destfile' where id='$id'";

        $query = mysqli_query($con,$updatequery);

        if($query){
            header('location:addproduct.php');
        }else{
            echo "not inserted";
        }
    }
}

?>



<div class="container">
    <div class="upload-form">

        <form action="" method="post" enctype="multipart/form-data">
            <div class="mb-3">
                <input type="text" class="form-control" name="product_name" placeholder="File Title" value="<?php echo $result['product_name'];?>">
            </div>
            <div class="mb-3">
                <input type="text" class="form-control" name="product_desc" placeholder="File Description" value="<?php echo $result['product_desc'];?>">
            </div>
            <div class="mb-3">
                <input type="number" class="form-control" name="cost" placeholder="cost" value="<?php echo $result['cost'];?>">
            </div>
            <div class="mb-3">
                <input type="file" class="form-control" name="file" >
            </div>
            
            <button type="submit" name="submit" class="btn btn-primary" value="update"></button>

        </form>
    </div>
</div>


    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

  </body>
</html>