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
       fieldset {
           margin : auto;
           margin-top: 100px;
            width: 50%;
       }

       table  tr th {
           padding-top: 5px;
       }
       img {
           width: 20%;
       }
   </style>

</head>
<body>

<fieldset>
   <legend>Show media</legend>

   <form action="actions/a_update.php"  method="post">
       <table  cellspacing="0" cellpadding= "0">
           <tr>
               <td>title</td>
              <td>
                  <p>
                    <?php echo $data['title'] ?>
                  </p>
                </td>
           </tr> 
           <tr>
               <td>Genge</td>
              <td>
                  <p>
                    <?php echo $data['FK_genre'] ?>
                  </p>
                </td>
           </tr> 
           <tr>
               <td>Author</td>
              <td>
                  <p>
                    <?php echo $data['FK_author'] ?>
                  </p>
                </td>
           </tr> 
           <tr>
               <td>image</td>
               
               <td><img src="<?php echo $data['image'] ?>"></td>
           </tr> 
           <tr>
               <td>Description</td>
               <td>
                  <p>
                    <?php echo $data['mediaDescription'] ?>
                  </p>
                </td>
           </tr>  
            <tr>
               <td>isbn_ean</td>
               <td>
                  <p>
                    <?php echo $data['isbn_ean'] ?>
                  </p>
                </td>
           </tr>     
           <tr>
               <td>publishdate</td>
               
               <td>
                  <p>
                    <?php echo $data['publishDate'] ?>
                  </p>
                </td>
           </tr>
            <tr>
               <td>publisher</td>
               
               <td>
                  <p>
                    <?php echo $data['FK_publisher'] ?>
                  </p>
                </td>
           </tr>
           <tr>
               <td>Media type</td>
               
               <td>
                  <p>
                    <?php echo $data['FK_mediatype'] ?>
                  </p>
                </td>
           </tr>
           <tr>
               <td>Status</td>
               
               <td>
                  <p>
                    <?php echo $data['FK_status'] ?>
                  </p>
                </td>
           </tr>
           <tr>
               <input type= "hidden" name= "id" value= "<?php echo $data['mediaID']?>"/>
              
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