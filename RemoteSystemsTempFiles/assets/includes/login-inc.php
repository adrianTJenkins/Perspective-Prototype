
<?php

session_start();

if(isset($_POST['submit'])) {

  include 'dbh-inc.php';

  $uname = mysqli_real_escape_string($conn, $_POST['uname']);
  $pwd= mysqli_real_escape_string($conn, $_POST['psw']);

  //Error Handlers
  //Check if inputs are empty
  if(empty($uname) || empty($pwd)) {
    header("Location: ../../signIn.php?login=empty");
    exit();
  }

  else {
      $sql = "SELECT * FROM users WHERE user_name='$uname' OR user_email='$uname'";
      $result = mysqli_query($conn, $sql);
      $resultCheck = mysqli_num_rows($result);
      if($resultCheck < 1) {
        header("Location: ../../signIn.php?login=error");
        exit();
      }
      else {
        if($row = mysqli_fetch_assoc($result)) {
          //De-hasing the password
          $hashedPwdCheck = password_verify($pwd, $row['user_pwd']);
          if($hashedPwdCheck == false) {
            header("Location: ../../signIn.php?login=error");
            exit();
          }
          elseif($hashedPwdCheck == true) {
            //Log in the user here
            $_SESSION['u_id'] = $row['user_id'];
            $_SESSION['u_email'] = $row['user_email'];
            $_SESSION['u_name'] = $row['user_name'];
            header("Location: ../../producer.php?login=success");
            exit();
          }
        }
      }
  }
}

else {
  header("Location: ../../signIn.php?login=error");
  exit();
}
