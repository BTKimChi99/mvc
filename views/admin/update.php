<?php
    include_once('header.php')
?>
<div class="content-wrapper">
    <div class="register">
        <h3>Update user</h3>
        <form action="" method="POST" class="validate">
            <table style="width:70%">
                <tr>
                    <td>Firstname:</td>
                    <td><input type="text" name="firstname" placeholder="Firstname" value="<?php echo $dataId['firstname'] ?>"></td>
                </tr>
                <tr>
                    <td>Lastname:</td>
                    <td><input type="text" name="lastname" placeholder="Lastname" value="<?php echo $dataId['lastname'] ?>"></td>
                </tr>
                <tr>
                    <td>Username:</td>
                    <td><input type="text" name="username" placeholder="Username" value="<?php echo $dataId['username'] ?>"></td>
                </tr>
                <tr>
                    <td>Email:</td>
                    <td><input type="email" name="email" placeholder="Email" value="<?php echo $dataId['email'] ?>"></td>
                </tr>
                <tr>
                    <td>Password:</td>
                    <td><input type="password" name="password" placeholder="Password" value="<?php echo $dataId['password'] ?>"></td>
                </tr>
                <tr>
                    <td>Phone:</td>
                    <td><input type="text" name="phone" placeholder="Phone" value="<?php echo $dataId['phone'] ?>"></td>
                </tr>
                <tr>
                    <td>Birthday:</td>
                    <td><input type="date" name="birthday" placeholder="Birthday" value="<?php echo $dataId['birthday'] ?>"></td>
                </tr>
                <tr>
                    <td>Avatar:</td>
                    <td><input type="file" name="avatar" placeholder="Avatar" value="<?php echo $dataId['avatar'] ?>"></td>
                </tr>
                <tr>
                    <td>Role:</td>
                    <td><input type="text" name="role" placeholder="Role" value="<?php echo $dataId['role'] ?>"></td>
                </tr>
                <tr>
                    <td>&nbsp;</td>
                    <td><input type="submit" name="update" placeholder="Update"></td>
                </tr>
            </table>
        </form>
    </div>
</div>
<script src="../assets/js/jquery-3.5.1.min.js"></script>
<script src="../assets/js/jquery.validate.min.js"></script>
<script src="../assets/js/validation.js"></script>