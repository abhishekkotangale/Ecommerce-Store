

<?php

session_start();

$sql = "delete from users where username_user='$uid'  ";

$query = mysqli_query($con , $sql);

if($query){
  ?>

  <script>
      alert("deleted Successfully";)
      location.replace(../index.html);
  </script>

  <?php
}else{
echo "not";
}
?>