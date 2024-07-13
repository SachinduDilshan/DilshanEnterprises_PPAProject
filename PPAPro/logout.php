<?php
session_start();

session_unset();

session_destroy();


if (!isset($_SESSION["USERID"])) {
  echo "<script>
          if(confirm('Are you sure you want to log out?')) {
              window.location.href = 'index.php';
              alert('You have Log Out!');
          } else {
              // Redirect back to dashboard or any other page
              window.location.href = 'index.php';
          }
        </script>";
}

?>

