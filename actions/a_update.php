<?php 

require_once 'db_connect.php';

if ($_POST) {
   $uname = $_POST['userName'];
   $uemail = $_POST['userEmail'];
   $id = $_POST['id'];

   $sql = "UPDATE users SET userName = '$uname', userEmail = '$uemail' WHERE userId = {$id}" ;
   if($connect->query($sql) === TRUE) {
       echo  "<p>Successfully Updated</p>";
       echo "<a href='../update.php?id=" .$id."'><button type='button'>Back</button></a>";
       echo  "<a href='../index.php'><button type='button'>Home</button></a>";
   } else {
        echo "Error while updating record : ". $connect->error;
   }

   $connect->close();

}

?>
<!-- {$id} -->