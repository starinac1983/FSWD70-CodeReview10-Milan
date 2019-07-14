<?php require_once 'actions/db_connect.php'; ?> 

<!DOCTYPE html>
<html>
<head>
   <title>Milan's media library</title>

   <style type="text/css">
       * {
        font-family: monospace;
        font-size: 12px;
        vertical-align: middle;
       }

       .md {
           width : 90%;
           margin: auto;

       }
        
        table {
          vertical-align: middle;
           width: 100%;
                 }

   </style>
   <link rel="stylesheet"  href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"  integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u"  crossorigin="anonymous">

</head>
<body>

<div class ="md">
   <a href= "create.php"><button class='btn btn-sm btn-primary mb' type="button" >Add Media</button></a>
   <table  class="table table-striped mt-2" border="1" cellspacing= "0" cellpadding="0">
       <thead class="thead-danger text-monospace">
           <tr>
               <th class="text-monospace" scope="col">Media ID</th>
               <th class="text-monospace" scope="col">Media Type</th>
               <th class="text-monospace" scope="col">Status</th>
               <th class="text-monospace" scope="col">Genre</th>
               <th class="text-monospace" scope="col">Title</th>
               <th class="text-monospace" scope="col">Author Lastname</th>
               <th class="text-monospace" scope="col">Author Name</th>
               <th class="text-monospace" scope="col">ISBN or EAN</th>
               <th class="text-monospace" scope="col">Publisher</th>
               <th class="text-monospace" scope="col">Option</th>
           </tr>
       </thead>
       <tbody>

            <?php
           $sql = "SELECT media.mediaID, mediatype.mediaTypeName, mediastatus.status, genre.genre, media.title, author.authorLastName, author.authorFirstName, media.isbn_ean, publisher.publisherName 
              FROM media 
              INNER JOIN genre ON media.FK_genre=genre.genreId 
              INNER JOIN author ON media.FK_author=author.authorId 
              INNER JOIN publisher ON media.FK_publisher=publisher.publisherID 
              INNER JOIN mediatype ON media.FK_mediatype=mediatype.mediaTypeId 
              INNER JOIN mediastatus ON media.FK_status=mediastatus.statusId 
              ORDER BY `media`.`mediaID` ASC";
           $result = $connect->query($sql);

            if($result->num_rows > 0) {
                while($row = $result->fetch_assoc()) {
                   echo  "<tr class='text-monospace' scope='row'>
                       <td>".$row['mediaID']." </td>
                       <td>".$row['mediaTypeName']." </td>

                       <td>".$row['status']." </td>
                       <td>".$row['genre']." </td>
                       <td>".$row['title']." </td>
                       <td>".$row['authorLastName']."</td>
                       <td>".$row['authorFirstName']." </td>
                       <td>".$row['isbn_ean']."</td>
                       <td>".$row['publisherName']."</td>
                       <td>
                           <a href='showmedia.php?id=" .$row['mediaID']."'><button class='btn btn-sm btn-primary' type='button'>Show</button></a>
                           <a href='update.php?id=" .$row['mediaID']."'><button class='btn btn-sm btn-warning'type='button'>Edit</button></a>
                           <a href='delete.php?id=" .$row['mediaID']."'><button class='btn btn-sm btn-danger'type='button'>Delete</button></a>
                       </td>
                   </tr>" ;
               }
           } else  {
               echo  "<tr><td colspan='5'><center>No Data Avaliable</center></td></tr>";
           }
            ?>

            
       </tbody>
   </table>
</div>

</body>
</html>

<!-- "SELECT * FROM media" -->
