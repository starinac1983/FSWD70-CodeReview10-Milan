<?php require_once 'actions/db_connect.php'; ?> 

<!DOCTYPE html>
<html>
<head>
   <title>Milan's media library</title>

   <style type="text/css">
       .md {
           width : 100%;
           margin: auto;
       }

        table {
           width: 100%;
            margin-top: 20px;
       }

   </style>

</head>
<body>

<div class ="md">
   <a href= "create.php"><button type="button" >Add Media</button></a>
   <table  border="1" cellspacing= "0" cellpadding="0">
       <thead>
           <tr>
               <th>Media ID</th>
               <th>Media Type</th>
               <th>Status</th>
               <th>Genre</th>
               <th>Title</th>
               <th>Author Lastname</th>
               <th>Author Name</th>
               <th>ISBN or EAN</th>
               <th>Publisher</th>
               <th>Option</th>
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
                   echo  "<tr>
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
                           <a href='showmedia.php?id=" .$row['mediaID']."'><button type='button'>Show media</button></a>
                           <a href='update.php?id=" .$row['mediaID']."'><button type='button'>Edit</button></a>
                           <a href='delete.php?id=" .$row['mediaID']."'><button type='button'>Delete</button></a>
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