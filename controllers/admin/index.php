<?php 
    if(isset($_GET['action'])){
        $action = $_GET['action'];
    }else{
        $action = '';
    }
    switch($action){
        case 'add':{
            if(isset($_POST['register'])){
                $firstname = $_POST['firstname'];
                $lastname = $_POST['lastname'];
                $username = $_POST['username'];
                $email = $_POST['email'];
                $password = $_POST['password'];
                $phone = $_POST['phone'];
                $birthday = $_POST['birthday'];
                $avatar = $_POST['avatar'];
                $role = $_POST['role'];
                if ($db->insertData($firstname, $lastname, $username, $email, $password, $phone, $birthday, $avatar, $role )){
                    echo '<script language="javascript">alert("You have successfully registered!"); window.location="index.php";</script>';
                }else {
                    echo '<script language="javascript">alert("Your registration was unsuccessful!"); window.location="views/create.php";</script>';
                }
            }
            require_once('views/admin/create.php');
            break;
        }
        case 'list':{
            $table = "users";
            $data = $db->getAllData($table);
            require_once('views/admin/list.php');
            break;
        }
        case 'edit':{
            if(isset($_GET['id'])){
                $id = $_GET['id'];
                $tblTable = "users";
                $dataId = $db->getDataId($tblTable, $id);
                if(isset($_POST['update'])){
                    //Lấy dữ liệu từ view
                    $firstname = $_POST['firstname'];
                    $lastname = $_POST['lastname'];
                    $username = $_POST['username'];
                    $email = $_POST['email'];
                    $password = $_POST['password'];
                    $phone = $_POST['phone'];
                    $birthday = $_POST['birthday'];
                    $avatar = $_POST['avatar'];
                    $role = $_POST['role'];
                    //Truyền dữ liệu lấy từ view sang model
                    if($db->updateData($id, $firstname, $lastname, $username, $email, $password, $phone, $birthday, $avatar, $role)){
                        echo '<script language="javascript">alert("You have successfully updated!"); window.location="http://localhost:8080/demo1/index.php?controllers=admin&action=list";</script>';
                    }
                }
            }
            require_once('views/admin/update.php');
            break;
        }
        case 'delete':{
            if(isset($_GET['id'])){
                $id = $_GET['id'];
                $tblTable = "users";

                if($db->deleteData($id, $tblTable)){
                    echo '<script language="javascript">alert("You have successfully deleted!"); window.location="http://localhost:8080/demo1/index.php?controllers=admin&action=list";</script>'; 
                }
            }
            break;
        }
        default:{
            require_once('views/login.php');
            break;
        }
    }
?>