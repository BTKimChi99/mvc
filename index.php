<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>AdminLTE | Dashboard</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <link rel="stylesheet" href="./assets/plugins/fontawesome-free/css/all.min.css">
    <link rel="stylesheet" href="./assets/dist/css/adminlte.min.css">
    <link rel="stylesheet" href="./assets/plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
    <link rel="stylesheet" href="./assets/css/style.css">
   </head>
  <body class="hold-transition sidebar-mini layout-fixed">
    <div class="wrapper">
        <?php
           // include_once('views/admin/header.php')
        ?>
        <footer class="main-footer"></footer>
    </div>
    <script src="./assets/plugins/jquery/jquery.min.js"></script>
    <script src="./assets/dist/js/adminlte.js"></script>
    <script src="./assets/js/jquery-3.5.1.min.js"></script>
    <script src="./assets/js/jquery.validate.min.js"></script>
    <script src="./assets/js/validation.js"></script>
  </body>
</html>
<?php 
    include "models/config.php";
    $db = new Database;
    $db->connect();
    if(isset($_GET['controllers'])){
        $controllers = $_GET['controllers'];
    }else{
        $controllers = '';
    }
    switch($controllers){
        case 'admin':{
            require_once('controllers/admin/index.php');
            break;
        }
        default:{
            require_once('controllers/login.php');
            break;
        }

    }
?>