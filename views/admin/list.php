<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./assets/css/style.css">
    <title>List user</title>
</head>
<body>
    <?php
        include_once('header.php')
    ?>
    <table border="1" class="list">
        <tr class="style_tr">
            <td>Id</td>
            <td>Firstname</td>
            <td>Lastname</td>
            <td>Username</td>
            <td>Email</td>
            <td>Phone</td>
            <td>Birthday</td>
            <td>Avatar</td>
            <td>Actions</td>
        </tr>
        <?php
            $stt = 1;
            foreach($data as $value){
        ?>
        <tr>
            <td><?php echo $stt; ?></td>
            <td><?php echo $value['firstname']; ?></td>
            <td><?php echo $value['lastname']; ?></td>
            <td><?php echo $value['username']; ?></td>
            <td><?php echo $value['email']; ?></td>
            <td><?php echo $value['phone']; ?></td>
            <td><?php echo $value['birthday']; ?></td>
            <td><img src="<?php echo $value['avatar']; ?>" alt=""></td>
            <td>
                <a href="http://localhost:8080/demo1/index.php?controllers=admin&action=edit&id=<?php echo $value['id']; ?>">Edit</a> |
                <a onclick = "return confirm('Are you sure you want to delete it?')" href="http://localhost:8080/demo1/index.php?controllers=admin&action=delete&id=<?php echo $value['id']; ?>">Delete</a>
            </td>
        </tr>
        <?php
            $stt++;
            }
        ?>
    </table>
</body>
</html>
