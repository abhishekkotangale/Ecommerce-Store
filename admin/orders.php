

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
    <title>Student Applied</title>
  </head>
  <body>

  <?php
    include 'header-ad.php';
  ?>
  
    <div class="table-responsive">
    <table class="table table-hover table-bordered">
        <h1 class="pb-5 text-center">Orders</h1>
        <thead>
          <tr>
            <th scope="col">id</th>
            <th scope="col">user_id</th>
            <th scope="col">item_id</th>
            <th scope="col">Status</th>
          </tr>
        </thead>
        <tbody>
          <?php
                    include '../assets/connection.php';
                    $selectQuery = "SELECT u.username_user,u.email ,u.city, u.mobile, u.address , p.product_name , p.cost, p.pic , orderdate FROM user_items up INNER JOIN users u ON u.id = up.user_id INNER JOIN product p ON p.id = up.item_id WHERE status = 'Confirmed' ORDER BY orderid DESC";
                    $query = mysqli_query($con , $selectQuery);
                    while($result = mysqli_fetch_array($query)){
            

          
            ?>

          <tr>
            <td><?php echo $result['username_user'];?></td>
            <td><?php echo $result['email'];?></td>
            <td><?php echo $result['city'];?></td>
            <td><?php echo $result['mobile'];?></td>
            <td><?php echo $result['address'];?></td>
            <td><?php echo $result['product_name'];?></td>
            <td><?php echo $result['cost'];?></td>
            <td><img src="<?php echo $result['pic'];?>" width="100" height="100"></td>
            <td><?php echo $result['orderdate'];?></td>
            
            </td>
          </tr>

            <?php
          
          ?>


              <?php
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