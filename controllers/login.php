<?php 
    if(isset($_POST['login'])){
        include_once("models/config.php");
        $database = new Database();
        $username = $_POST['username'];
        $password = $_POST['password'];
        $result = $database->login($username, $password);
        if($result =$database->num_rows()) {
            echo "login success";
        } else {
            echo "failed";
        }
    }else{
        include_once("views/login.php");    
    }
?>