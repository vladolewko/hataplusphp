<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<?php if(!$_POST):?>
    <form action="admin.php" method="POST">
        <label for="login">Login</label>
        <input type="text" id="login" name="login">
        <label for="password">password</label>
        <input type="text" id="password" name="password">
        <input type="submit">
    </form>
   
    <?php elseif($_POST):?>
        <?php 
        $json_admin = 'json/admin.json';
        $admin = json_decode(file_get_contents($json_admin), true);

        $login = $_POST["login"];
        $password = $_POST["password"];

        $adminlogin = $admin[0]["login"];
        $adminpassword = $admin[0]["password"];
        ?>
        <?php if($adminlogin == $login && $adminpassword == $password):?>
            <p class="admin">admin</p>
            <form action="price.php" method="POST">
                <div class="point">
                    <label for="name">Name:</label>
                    <input type="text" name="name" id="name" required>
                </div>
                <div class="point">
                    <label for="square">Square:</label>
                    <input type="text" name="square" id="square" required>
                </div>
                <div class="point">
                    <label for="rooms">Rooms:</label>
                    <input type="text" name="rooms" id="rooms" required>
                </div>
                <div class="point">
                    <label for="car">Car:</label>
                    <input type="text" name="car" id="car" required>
                </div>
                <div class="point">
                    <label for="cost">Cost:</label>
                    <input type="text" name="cost" id="cost" required>
                </div>
                <div class="point">
                    <label for="img">img:</label>
                    <input type="file" name="img" id="img" required>
                </div>
                <div class="point"><input type="submit" value="Submit"></div>
                <input type="hidden" name="admin" value="1">
            </form>
        <?php else:?>
            <p>something wents wrong</p>
            <a href="admin.php">try again</a>
        <?php endif;?>
     
    <?php endif;?>
</body>
</html>