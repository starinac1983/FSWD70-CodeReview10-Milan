<?php 

require_once 'actions/db_connect.php';

if ($_GET['id']) {
   $id = $_GET['id'];

   $sql = "SELECT * FROM media WHERE mediaID = {$id}" ;
   $result = $connect->query($sql);


   $data = $result->fetch_assoc();
   $connect->close();


?>

<!DOCTYPE html>
<html>
<head>
   <title >Edit Media</title>

   <style type= "text/css">
       fieldset {
           margin : auto;
           margin-top: 100px;
            width: 50%;
       }

       table  tr th {
           padding-top: 20px;
       }
   </style>

</head>
<body>

<fieldset>
   <legend>Edit Media</legend>

   <form action="actions/a_update.php"  method="post">
       <table  cellspacing="0" cellpadding= "0">
           <tr>
               <th>title</th>
               
               <td><input type="text"  name="title" placeholder ="" value="<?php echo $data['title'] ?>" /></td>
               
           </tr> 
           <tr>
               <th>image</th>
               
               <td><input type="text"  name="image" placeholder ="" value="<?php echo $data['image'] ?>" /></td>
           </tr> 
           <tr>
               <th>Description</th>
               
               <td><textarea type="text" name="mediaDescription" placeholder ="" value="<?php echo $data['mediadescription'] ?>" /></textarea></td>
           </tr>  
            <tr>
               <th>isbn_ean</th>
               
               <td><input type="text" name="isbn_ean" placeholder ="" value="<?php echo $data['isbn_ean'] ?>" /></td>
           </tr>     
           <tr>
               <th>publishdate</th>
               
               <td><input type="date" name="publishdate"  placeholder="publishdate" value="<?php echo $data['publishdate'] ?>" /></td>
           </tr>
           <tr>
               <input type= "hidden" name= "id" value= "<?php echo $data['mediaID']?>"/>
               <td><button  type= "submit">Save Changes</button ></td>
               <td><a href= "index.php"><button  type="button" >Back</button ></a></td >
           </tr>
       </table>
   </form >

</fieldset>
</div>
</body>
</html>

<!-- <?php 
}
?> -->