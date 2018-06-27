<?php

if (isset($_POST['submit'])) {

  include_once 'dbh-inc.php';

  $usr = mysqli_real_escape_string($conn, $_POST['usr']);
  $email = mysqli_real_escape_string($conn, $_POST['email']);
  $pwd = mysqli_real_escape_string($conn, $_POST['pwd']);


  //Error Handlers
  //Check for empty fields
  if(empty($usr) || empty($email) || empty($pwd)) {
    header("Location: ../signUp.php?signup=empty");
    exit();
  }

  else {
    //Check if input characters are valid
    if (!preg_match("/^[a-zA-Z]*$/", $usr)) {
      header("Location: ../signUp.php?signup=invalid");
      exit();
    }
    else {
      //Check if email is valid
      if(!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        header("Location: ../../signUp.php?email");
        exit();
      }
      else {
        $sql = "SELECT * FROM users WHERE user_name='$usr'";
        $result = mysqli_query($conn, $sql);
        $resultCheck = mysqli_num_rows($result);

        if ($resultCheck > 0) {
          header("Location: ../../signUp.php?email=usertaken");
          exit();
        }
        else {
          //Hashing the password
          $hashedPwd = password_hash($pwd, PASSWORD_DEFAULT);
          //Insert the user into the database
          $sql = "INSERT INTO users (user_name, user_email, user_pwd) VALUES ('$usr', '$email', '$hashedPwd');";
          mysqli_query($conn, $sql);
          header("Location: ../../signUp.php?signup=success");
          exit();
        }
      }
    }
  }
}

else {
  header("Location: ../../signUp.php");
  exit();
}
