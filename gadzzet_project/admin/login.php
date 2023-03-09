<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="stylesheet" type="text/css" href="../style/login.css">
    <title>Admin| National Informatics Center</title>
</head>
<body>
<div>
<nav>
        <div class="logo">
        <img class="emblem" src="https://www.nic.in/wp-content/themes/NICTheme/assets/images/emblem.png" alt="image of emblem" style="width: 45px; min-height: 68px; position: relative; top: 5px;">
        <a href="https://www.nic.in/" tabindex="1" title="National Informatics Centre"> <img src="https://www.nic.in/wp-content/themes/NICTheme/assets/images/logo.png" alt="image of nic logo" style="position: relative;top: -7px;" class="mob-logo"></a>
        </div>
        <ul class="nav-links">
            <li><a href="../user/index.php">Home</a></li>
            <li><a href="../admin/login.php">Admin</a></li>
            <li><a href="../user/table.php">Table</a></li>
            <li><a href="#">About</a></li>
        </ul>

    </nav>
</div>
<div class="form">
<form action="validate.php" method="post">
        <h2>LOGIN</h2>
        <?php if(isset($_GET['error'])) { ?>
            <p class="error"> <?php echo $_GET['error']; ?></p>
        <?php } ?> <br>

        <label for="">Username</label>
        <input type="text" name="uname" placeholder="UserName"> <br>

        <label for="">Password</label>
        <input type="password" name="password" placeholder="Password"> <br>
        <button type="submit">Login</button>
    </form>
</div>
    
</body>
</html>