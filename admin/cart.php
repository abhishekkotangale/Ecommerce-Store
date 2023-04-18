

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="addjob.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Cart</title>
  </head>
  <body>

  <?php
    include 'header-ad.php';
  ?>
  
    <div class="table-responsive">
    <table class="table table-hover table-bordered">
        <h1 class="pb-5 text-center">Cart</h1>
        <thead>
          <tr>
            <th scope="col">Image</th>
            <th scope="col">Product Name</th>
            <th scope="col">Cost</th>
            <th scope="col">Order</th>
            <th scope="col">Cancel Order</th>
          </tr>
        </thead>
        <tbody>
          <?php
                    include '../assets/connection.php';
                    $userid = $_SESSION['id'];
                    $selectQuery = " SELECT * FROM user_items INNER JOIN product ON user_items.item_id = product.id WHERE user_id = '$userid' and status = 'Added to cart' "  ;
                    $query = mysqli_query($con , $selectQuery);
                    while($result = mysqli_fetch_array($query)){
            

          if($result['status'] == "Added to cart" or $result['status'] == "Confirmed"){
            ?>

          <tr>
            <td><img src="<?php echo $result['pic'];?>" width="100" height="100"></td>
            <td><?php echo $result['product_name'];?></td>
            <td><?php echo $result['cost'];?></td>
            <td><?php if ($result['status'] == "Added to cart") {
              ?>
               <a href="cartaccept.php?update=<?php echo $result['orderid']; ?>">Order</i></a>
            </td>
            <td>
               <a href="decline.php?update=<?php echo $result['orderid']; ?>">Decline</i></a>
              
              
              <?php 
            }else{
              echo $result['status'];
            }?></td>
          </tr>

            <?php
          }
          
            }
            ?>
          
        </tbody>
      </table>
    </div>


    



      <footer>
        <div class="footer-para text-center">
            <p>Copyright ©  All Rights Reserved | Contact Us: +91 90000 00000</p>
        </div>
      </footer>


    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

  </body>
</html>