<?php
  include("database.php");

  if (isset($_GET['id']))  {
    $id = $_GET['id'];
    $query ="DELETE FROM task WHERE id = $id";
    $result = mysqli_query($conn,$query);
    if (!$result){
        die("Query Failed"); 
    }

         $_SESSION['message'] = 'Task Removed Successfully';
         
         
         header("Location: index.php");

  }
?>