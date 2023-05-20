<?php 

  $emailDb = "pedro@email.com";
  $passwordDb = password_hash("senha",PASSWORD_DEFAULT);


  $email = $_POST['email-input'];
  $password = $_POST['password-input'];

  $passwordIsSameAsDb = password_verify($password,$passwordDb);

  if($emailDb == $email and $passwordIsSameAsDb){
    header("Location: home.php");
  }else{
    header("Location: login.php?login-error=1");
  }


?>