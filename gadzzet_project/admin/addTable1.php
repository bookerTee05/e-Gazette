<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./addTable1.css">
    <title>Document</title>
</head>
<body>

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
            <li><a href="logout.php">Logout <?php echo $_SESSION['name']; ?></a></li>
        </ul>
    </nav>
    
    <section id="menu">
    <div class="container">

        <div class="card-header">
            <h4>Adding To the Table
             <button>
                <a href="editTable1.php">BACK</a>
            </button>
            </h4>
        </div>

        <div class="container-body"> 
            <form action="validate_add_table1.php" method="POST">
                <div class="set1">
                <label>Section Number</label>
                <input type="text" name="section">
                </div>

                <div class="set1">
                <label>Article Number</label>
                <input type="text" name="article">
                </div>

                <div class="set1">
                <label>Description</label>
                <input type="text" name="description">
                </div>

                <div class="set1">
                <button type="submit" name="save_table">Save</button>
                </div>



            </form>
        </div>
        
    </div>

    

   
</body>
</html>