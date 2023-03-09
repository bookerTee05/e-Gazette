<!-- <?php

require 'db_conn.php';
session_start();

?> -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="./editTable1.css">
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
        <div class="card_header">
            <h4>Add to the table 
                <button><a href="addTable1.php">Table1</a></button>
                <button>
                <a href="./dashboard.php">BACK</a>
                </button>
            </h4>
        </div>

        <div class="card_body">
            <table class="content-table">
                <thead>
                    <tr>
                        <th>id</th>
                        <th>section</th>
                        <th>article</th>
                        <th>description</th>
                        <th>action</th>
                    </tr>
                </thead>
                <tbody>
                     <?php
                        $query = "SELECT * FROM table2";
                        $query_run = mysqli_query($conn, $query);

                        if (mysqli_num_rows($query_run) > 0) {
                           foreach ($query_run as $table1) {
                     ?>

                                <tr>
                                    <td><?= $table1['id'];?></td>
                                    <td><?= $table1['section'];?></td>
                                    <td><?= $table1['article'];?></td>
                                    <td><?= $table1['description'];?></td>
                                    <td>
                                    <a href="#"><button>Veiw</button></a>
                                    <a href="#"><button>Edit</button></a>
                                    <a href="#"><button>Delete</button></a>
                                    </td>
                                </tr>



                             <!-- <?php   
                           }
                        }

                        else {
                            echo "<h5> No record found <h5>";
                        }
                    ?> -->
                    
                </tbody>
            </table>
        </div>

    </div>
    
</body>
</html>