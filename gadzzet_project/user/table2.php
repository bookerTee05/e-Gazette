<!-- <?php
session_start();
include_once('connection.php');
$query="SELECT * FROM `table2`";
$result=mysqli_query($con,$query);
?> -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="stylesheet" href="../style/table.css">
    <title>Table| National Informatics Center</title>
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
    </ul>
</nav>

<section>
            
      <table class="content-table">
        <thead>
            <tr>
                <td align="center" colspan="4">Year
                    <select id="selectPage">
                        <option value="./table.php">2022</option>
                        <option value="#">2023</option>
                        <option value="./table3.php">2024</option>
                        
                    </select>
                </td>
            </tr>
            <tr>
                <th>Sl. no.</th>
                <th>Section</th>
                <th>Article</th>
                <th>Description</th>
            </tr>
        </thead>

        <tbody>
            

            <?php 
            while ($rows=mysqli_fetch_assoc($result)) {

                ?>
             <tr>
                <td><?php echo $rows['id']; ?></td>
                <td><?php echo $rows['section']; ?></td>
                <td><?php echo $rows['article']; ?></td>
                <td><?php echo $rows['description']; ?></td>
                
            </tr>

         <?php       
            }

            ?>
            
        </tbody>
      </table>
</section>
<script>
  document.getElementById("selectPage").onchange = function() {
    window.location = this.value;
  };
</script>

   
</body>
</html>