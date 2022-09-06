<?php

include         ('connect.php');

$username       = $_POST['username'];
$senha          = $_POST['password'];

if(isset($_POST['btn-login'])){

   session_start();

   /*if(empty($username)){
      echo '<h1>Enter your Username Please...</h1>';
      header("refresh:3; url=index.html");
   }else if($senha){
      echo '<h1>Enter your Password Please...</h1>';
      header("refresh:3; url=index.html");
   }*/


   $query       = mysqli_query($connect,"SELECT * FROM loginTry WHERE username='$username' AND senha='$senha'");

   $result      = mysqli_fetch_assoc($query);

   if(empty($result)){
      /*echo '<h1>Error Username or Password...</h1>';*/ 
      header("location:index.html");
   }else{
      $_SESSION['username']   = $result['username'];
      $_SESSION['senha']      = $result['senha'];

      echo 'You are Connected...';
      header("refresh:3; url=painel.php");
   }

}

 

?>