<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>dashboard</title>

  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">

   <!-- Plugin Javascript !-->

  <!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet" href="View/bower_components/bootstrap/dist/css/bootstrap.min.css">

  <!-- Font Awesome -->
  <link rel="stylesheet" href="View/bower_components/font-awesome/css/font-awesome.min.css">

  <!-- Ionicons -->
  <link rel="stylesheet" href="View/bower_components/Ionicons/css/ionicons.min.css">

  <!-- Theme style -->
  <link rel="stylesheet" href="View/dist/css/AdminLTE.css">

  <!-- AdminLTE Skins.  -->
  <link rel="stylesheet" href="View/dist/css/skins/_all-skins.min.css">

  <!-- Google Font -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>
 <!--  Body  !-->
<body class="hold-transition skin-blue sidebar-collapse sidebar-mini login-page ">

<?php 

if($_SESSION["loggIn"] && $_SESSIONp["loggedIn"] == "ok"){
  // Site wrapper 
  echo '<div class="wrapper">';
  // modules
 include "modules/header.php";
 include "modules/sidebar.php";
 if(isset($_GET["route"])){
  if($_GET["route"] == "home" ||
    $_GET["route"] == "users" ||
    $_GET["route"] == "categories" ||
    $_GET["route"] == "products" ||
    $_GET["route"] == "customers" ||
    $_GET["route"] == "manage-sales" ||
    $_GET["route"] == "create-sales" ||
    $_GET["route"] == "sales-report" ||
    $_GET["route"] == "logout"){
      include "modules/".$_GET["route"].".php";
    }else{
      include "modules/404.php";
    }
  }

 include "modules/footer.php";

 echo "</div>";

}else{

  include "modules/login.php";
  
}

?>

<script src="View/js/template.js"></script>

</body>
</html>
