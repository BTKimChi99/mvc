<?php 
    class Database{
        private $host = "localhost";
        private $name = "root";
        private $pass = "";
        private $dbname = "mvc";
        private $conn = null;
        private $result = null;
        //Kết nối Database
        public function connect(){
            $this->conn = new mysqli($this->host, $this->name, $this->pass, $this->dbname);
            if(!$this->conn){
                echo 'Kết nối thất bại!';
                exit();
            }else{
                mysqli_set_charset($this->conn, 'utf8');
            }
            return $this->conn;
        }
        //Thực thi câu lệnh truy vấn
        public function execute($sql){
            $this->result = $this->conn->query($sql);
            return $this->result;
        }
        //Phương thức lấy dữ liệu
        public function getData(){
            if($this->result){
                $data = mysqli_fetch_array($this->result);
            }else{
                $data = 0;
            }
            return $data;
        }
        //Phương thức lấy dữ liệu cần sửa
        public function getDataId($table, $id){
            $sql = "SELECT * FROM $table WHERE id = '$id'";
            $this->execute($sql);
            if($this->num_rows()!=0){
                $data = mysqli_fetch_array($this->result);
            }else{
                $data = 0;
            }
            return $data;
        }
        //Phương thức lấy toàn bộ dữ liệu
        public function getAllData($table){
            $sql = "SELECT * FROM $table";
            $this->execute($sql);
            if($this->num_rows()==0){
                $data = 0;
            }else{
                while($datas = $this->getData()){
                $data[] = $datas;
                }
            }
            return $data;
        }
        //Đếm số lượng bản ghi
        public function num_rows(){
            if($this->result){
                $num = mysqli_num_rows($this->result);
            }else{
                $num = 0;
            }
            return $num;
        }
        //Phương thức thêm dữ liệu
        public function insertData($firstname, $lastname, $username, $email, $password, $phone, $birthday, $avatar, $role){
            $sql = "INSERT INTO users(id, firstname, lastname, username, email, password, phone, birthday, avatar, role) VALUES(null, '$firstname', '$lastname', '$username', '$email', '$password', '$phone', '$birthday', '$avatar', '$role')";
            return $this->execute($sql);
        }
        //Phương thức sửa dữ liệu
        public function updateData($id, $firstname, $lastname, $username, $email, $password, $phone, $birthday, $avatar, $role){
            $sql = "UPDATE users SET firstname = '$firstname',lastname = '$lastname', username = '$username', email = '$email', password = '$password', phone = '$phone', birthday = '$birthday', avatar = '$avatar', role = '$role' WHERE id = '$id' ";
            return $this->execute($sql);
        }
        //Phương thức xóa
        public function deleteData($id, $table){
            $sql = "DELETE FROM $table WHERE id = '$id'";
            return $this->execute($sql);
        }

        //
        public function login($username, $password){
            $sql = "SELECT * FROM users WHERE username = '$username' and password = '$password' "; 
            return $this->execute($sql);
        }
    }
?>