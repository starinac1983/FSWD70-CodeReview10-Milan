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
   <title>Show media</title>

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
       img {
       width: 150px;
       margin: auto;
       }
      
   </style>
   <link rel="stylesheet"  href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"  integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u"  crossorigin="anonymous">

</head>
<body>
<div class ="md">
<fieldset>
   <legend>Show media</legend>

   <form action="actions/a_update.php"  method="post">
       <table  class="table table-striped" class="md" cellspacing="0" cellpadding= "0">
           <tr>
               <td><label> title</label></td>
              <td>
                  <p>
                    <?php echo $data['title'] ?>
                  </p>
                </td>
           </tr> 
           <tr>
               <td><label>Genre</label></td>
              <td>
                  <p>
                    <?php echo $data['FK_genre'] ?>
                  </p>
                </td>
           </tr> 
           <tr>
               <td><label>Author</label></td>
              <td>
                  <p>
                    <?php echo $data['FK_author'] ?>
                  </p>
                </td>
           </tr> 
           <tr>
               <td><label>image</label></td>
               
               <td><img src="<?php echo $data['image'] ?>"></td>
           </tr> 
           <tr>
               <td><label>Description</label></td>
               <td>
                  <p>
                    <?php echo $data['mediaDescription'] ?>
                  </p>
                </td>
           </tr>  
            <tr>
               <td><label>isbn_ean</label></td>
               <td>
                  <p>
                    <?php echo $data['isbn_ean'] ?>
                  </p>
                </td>
           </tr>     
           <tr>
               <td><label>publishdate</label></td>
               
               <td>
                  <p>
                    <?php echo $data['publishDate'] ?>
                  </p>
                </td>
           </tr>
            <tr>
               <td><label>publisher</label></td>
               
               <td>
                  <p>
                    <?php echo $data['FK_publisher'] ?>
                  </p>
                </td>
           </tr>
           <tr>
               <td><label>Media type</label></td>
               
               <td>
                  <p>
                    <?php echo $data['FK_mediatype'] ?>
                  </p>
                </td>
           </tr>
           <tr>
               <td><label>Status</label></td>
               
               <td>
                  <p>
                    <?php echo $data['FK_status'] ?>
                  </p>
                </td>
           </tr>
           <tr>
               <input type= "hidden" name= "id" value= "<?php echo $data['mediaID']?>"/>
               <td></td>
               <td><a href= "index.php"><button class='btn btn-sm btn-primary' type="button" >Back</button ></a></td >
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