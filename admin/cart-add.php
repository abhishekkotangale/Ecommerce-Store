<?php
  session_start();
?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    

<?php

include '../assets/connection.php';


    $item_id = $_GET['item_id'];
    $user_id = $_SESSION['id'];

    $insertquery =  "INSERT INTO user_items(user_id, item_id, status) VALUES('$user_id', '$item_id', 'Added to cart')";
    $iquery = mysqli_query($con,$insertquery);

    if($iquery){
        ?>

        <script>
            alert("inserted successful");
            location.replace("adminhomepage.php");
        </script>
    <?php
      
    }else{
        ?>
        <script>
            alert("inserted not successful")
        </script>
    <?php
    }
    ?>
</body>
</html>