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
       * {
        font-family: monospace;
       }
       legend {
       text-align: center;
       }
       .md {
           width : 30%;
           margin: auto;
       }
       table {
        padding: 10px;
       }
   </style>
   <link rel="stylesheet"  href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"  integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u"  crossorigin="anonymous">

</head>
<body>
<div class ="md">
<fieldset>
   
<legend>Edit Media</legend>
   <form action="actions/a_update.php"  method="post">
       <table  class="table table-striped" class="md" border="0" cellspacing="1" cellpadding= "1">
         
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
               
               <td><textarea type="text" name="mediaDescription" placeholder ="insert new description" value="<?php echo $data['mediadescription'] ?>" /></textarea></td>
           </tr>  
            <tr>
               <th>isbn_ean</th>
               
               <td><input type="text" name="isbn_ean" placeholder ="" value="<?php echo $data['isbn_ean'] ?>" /></td>
           </tr>     
           <tr>
               <th>publishdate</th>
               
               <td><input type="date" name="publishDate"  placeholder="publishdate" value="<?php echo $data['publishdate'] ?>" /></td>
           </tr>
           <tr>
              <input type= "hidden" name= "id" value= "<?php echo $data['mediaID']?>"/>
              <td colspan='0'><a href= "index.php"><button  class='btn btn-sm btn-primary' type="button" >Back</button ></a></td>
              <td colspan='0'><button class='btn btn-sm btn-warning' type= "submit">Save Changes</button ></td>
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