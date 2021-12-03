<?php

    // Don't display server errors 
    ini_set("display_errors", "off");

    // Initialize a database connection
    $conn = mysqli_connect("localhost","root", "", "realestate");

    // Destroy if not possible to create a connection
    if(!$conn){
        echo "<h3 class='container bg-dark p-3 text-center text-warning rounded-lg mt-5'>Not able to establish Database Connection<h3>";
    }
     
    // Get data to display on index page
    $sql = "SELECT * FROM article";
    $query = mysqli_query($conn, $sql);

    // Create a new post
    if(isset($_REQUEST['new_post'])){
        $target="project2/".basename($_FILES['image_file']['name']);
        $title = $_REQUEST['title'];
        $content = $_REQUEST['content'];
        $image_file = "project2/".$_FILES['image_file']['name'];
        $article_date = date('y-m-d');
  

        $sql = "INSERT INTO article(title,content,image_file,article_date) VALUES('$title', '$content','$image_file','$article_date')";
        mysqli_query($conn, $sql);

        echo $sql;

        header("Location: index3.php?info=added");
        exit();
    }

    // Get post data based on id
    if(isset($_REQUEST['id'])){
        $id = $_REQUEST['id'];
        $sql = "SELECT * FROM article WHERE id = $id";
        $query = mysqli_query($conn, $sql);
    }

    // Delete a post
    if(isset($_REQUEST['delete'])){
        $id = $_REQUEST['id'];

        $sql = "DELETE FROM article WHERE id = $id";
        mysqli_query($conn, $sql);

        header("Location: index3.php");
        exit();
    }

    // Update a post
    if(isset($_REQUEST['update'])){
        $id = $_REQUEST['id'];
        $title = $_REQUEST['title'];
        $content = $_REQUEST['content'];

        $sql = "UPDATE article SET title = '$title' , content = '$content' WHERE id = $id";
        mysqli_query($conn, $sql);

        header("Location: index3.php");
        exit();
    }

?>
