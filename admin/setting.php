

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Products</title>

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="setting.css">
</head>
<body>
    <?php
        
        include '../admin/header-ad.php';
    ?>

<div class="container text-center pt-lg-4 pb-lg-4">
         <div class="card shadow-lg rounded">
            <h1>Change Password</h1>
            <form action="changepass.php" method="POST">
               <div class="mb-3">
                 <label for="exampleInputEmail1" class="form-label">Old Password</label>
                 <input type="password" class="form-control" id="exampleInputEmail1" name="oldPass" required>
               </div>
               <div class="mb-3">
                 <label for="exampleInputPassword1" class="form-label">New Password</label>
                 <input type="password" class="form-control" id="exampleInputPassword1" name="newpass" required>
               </div>
               <div class="mb-3">
                   <label for="exampleInputPassword1" class="form-label">Re-Enter New Password</label>
                   <input type="password" class="form-control" id="exampleInputPassword1" name="cnewpass" required>
                 </div>
                 <button type="submit" class="btn btn-primary" name="submit">Submit</button>
               
             </form>
            
         </div>
     </div>

     <div class="delete">
      <h1 class="text-center p-lg-5 bg-danger">Delete Acoount</h1>

      <?php
                    include '../assets/connection.php';
                    $selectQuery = "select * from users";
                    $query = mysqli_query($con , $selectQuery);
                    $result = mysqli_fetch_array($query)
                    
                   ?>
                   
                    <a href="delete.php?deleteData=<?php echo $_SESSION['id']; ?>">Delete Account</i></a></td>
                    


    </div>

     <!-- Button trigger modal -->




      <footer>
        <div class="footer-para text-center">
            <p>Copyright © Lifestyle Store. All Rights Reserved | Contact Us: +91 90000 00000</p>
        </div>
    </footer>

      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>