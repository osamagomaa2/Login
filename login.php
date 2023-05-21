<?php
include("db.php");
if(isset($_POST['submit'])){
     $username = $_POST['user'];
     $password = $_POST['pass'];

   $sql = "select * from login1 where user_name = '$username' and user_password = '$password'";
   $result = mysqli_query($connection,$sql);
   $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
   $count = mysqli_num_rows($result);

   if($count==1){
    header("Location:welcome.php");
   }

   else{
     echo `<script>
    window.location.href = "index.php";
    alert("login falied . invalid username or password")
     </script>`;
   }
}

?>