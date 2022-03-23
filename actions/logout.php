<?php
// include 'operations.php';
// session_start();
// //echo $_SESSION['Username'];
// unset($_SESSION['Username']);
// // //session_destroy();
// header('Location :../index.html');
// // die;
?>
<?php
session_start();
if (!$_SESSION['username'] or !$_SESSION['password']) {
    header('location: ../index.html');
}
// destroy session, it will remove ALL session settings
session_destroy(); //redirect to index page
header('Location:../index.html');
 ?>
