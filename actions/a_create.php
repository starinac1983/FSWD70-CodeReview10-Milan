<?php 

require_once 'db_connect.php';

if ($_POST) {
   $uname = $_POST['userName'];
   $uemail = $_POST['userEmail'];
  
   $sql = "INSERT INTO users (userName, userEmail) VALUES ('$uname','$uemail')";
    if($connect->query($sql) === TRUE) {
       echo "<p>New Record Successfully Created</p>" ;
       echo "<a href='../create.php'><button type='button'>Back</button></a>";
        echo "<a href='../index.php'><button type='button'>Home</button></a>";
   } else  {
       echo "Error " . $sql . ' ' . $connect->connect_error;
   }

   $connect->close();
}

?>
