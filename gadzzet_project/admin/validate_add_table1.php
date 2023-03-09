<?php
session_start();

require 'db_conn.php';

if (isset($_POST['save_table'])) {
    
    $section = mysqli_real_escape_string($conn,$_POST['section']);
    $article = mysqli_real_escape_string($conn,$_POST['article']);
    $description = mysqli_real_escape_string($conn,$_POST['description']);

    $query = "INSERT INTO table1(section,article,description) VALUES('$section','$article','$description')";

    $query_run = mysqli_query($conn, $query);

    if ($query_run) {

        $_SESSION['message'] = "Add Successfully!";
        header("Location: addTable1.php");
        exit(0);
    }
    else {
        $_SESSION['message'] = "Not Added!";
        header("Location: addTable1.php");
        exit(0);
    }
}

?>
