
<?php
    include_once('header.php')
?>
<div class="content-wrapper">
    <div class="register" >
        <h3>Create new user</h3>
        <form action="" method="POST" class="validate">
            <table style="width:70%">
                <tr>
                    <td>Firstname:</td>
                    <td><input type="text" name="firstname" placeholder="Firstname"></td>
                </tr>
                <tr>
                    <td>Lastname:</td>
                    <td><input type="text" name="lastname" placeholder="Lastname"></td>
                </tr>
                <tr>
                    <td>Username:</td>
                    <td><input type="text" name="username" placeholder="Username"></td>
                </tr>
                <tr>
                    <td>Email:</td>
                    <td><input type="email" name="email" placeholder="Email"></td>
                </tr>
                <tr>
                    <td>Password:</td>
                    <td><input type="password" name="password" placeholder="Password"></td>
                </tr>
                <tr>
                    <td>Phone:</td>
                    <td><input type="text" name="phone" placeholder="Phone"></td>
                </tr>
                <tr>
                    <td>Birthday:</td>
                    <td><input type="date" name="birthday" placeholder="Birthday"></td>
                </tr>
                <tr>
                    <td>Avatar:</td>
                    <td><input type="file" name="avatar" placeholder="Avatar"></td>
                </tr>
                <tr>
                    <td>Role:</td>
                    <td><input type="text" name="role" placeholder="Role"></td>
                </tr>
                <tr>
                    <td>&nbsp;</td>
                    <td><input type="submit" name="register" placeholder="Register"></td>
                </tr>
            </table>
        </form>
    </div>
</div>

      
      