<!DOCTYPE html>
<html>
<head>
   <title>Add Media</title>

   <style type= "text/css">
       fieldset {
           margin: auto;
            margin-top: 100px;
           width: 50% ;
       }

       table tr th  {
           padding-top: 20px;
       }
   </style>

</head>
<body>
<fieldset>
   <legend>Add Media</legend>

   <form action="actions/a_create.php" method= "post">
       <table cellspacing= "0" cellpadding="0">
           <tr>
               <td>
               <label for="fk_author">Author</label>
               </td>
               <td>
          <input list="author" id="fk_author" name="fk_author">
          <datalist id="author">
            <option value="1">Steven Pressfield</option>
            <option value="2">Matteo Garrone</option>
            <option value="3">Christopher Nolan</option>
            <option value="4">Danny Boyle</option>
            <option value="5">Martin Scorcesse</option>
            <option value="6">Tommy Jaud</option>
            <option value="7">Michael Altinger</option>
          </datalist>
          </td>
           </tr>     
           <tr>
            <td>
               <label for="fk_genre">Genre</label></td>
           <td><input list="genre" id="fk_genre" name="fk_genre">

          <datalist id="genre">
            <option value="1">history</option>
            <option value="2">thriller</option>
            <option value="3">adventure</option>
            <option value="4">drama</option>
            <option value="5">comedy</option>
          </datalist>
          </td>
           </tr>
           <tr>
               <td>Title</td>
               <td><input  type="text" name= "title" placeholder="" /></td>
           </tr>
           <tr>
            <td>
               <label for="mediaDescription">Media description</label></td>
          <td>
                <textarea id="mediaDescription" name="mediaDescription" rows="3" cols="40"></textarea>
                </td>
           </tr>
           <tr>
               <td>Image</td>
               <td><input  type="text" name="image" placeholder="insert url" /></td>
           </tr>
            <tr>
               <td>Isbn_ean</td>
               <td><input  type="text" name="isbn_ean" placeholder="insert isbn or ean" /></td>
           </tr>
            <tr>
               <td>Date</td>
               <td><input type="date" name="publishdate"  placeholder="publishdate" value="<?php echo $data['publishdate'] ?>" /></td>
           </tr>
           <tr>
            <td>
               <label for="fk_publisher">Publisher</label>
               </td>
               <td>
          <input list="publisher" id="fk_publisher" name="fk_publisher">
          <datalist id="publisher">
            <option value="1">Bantam books USA</option>
            <option value="2">EuroVideo Medien</option>
            <option value="3">Universal Pictures</option>
            <option value="4">Fischer Verlag</option>
          </datalist>
          </td>
           </tr>
           <tr>
            <td>
               <label for="fk_mediatype">Media type</label>
              </td>
              <td>
          <input list="mediatype" id="fk_mediatype" name="fk_mediatype">
          <datalist id="mediatype">
            <option value="1">cd</option>
            <option value="2">book</option>
            <option value="3">dvd</option>
          </datalist>
          </td>
           </tr>
           <tr>
            <td>
               <label for="fk_status">Status</label>
              </td>
              <td>
          <input list="mediastatus" id="fk_status" name="fk_status">
          <datalist id="mediastatus">
            <option value="1">available</option>
            <option value="2">reserved</option>
          </datalist>
          </td>
           </tr>
           <tr>
               <td><button type ="submit">Insert media</button></td>
               <td><a href= "index.php"><button  type="button">Back</button></a></td>
           </tr >
       </table>
   </form>

</fieldset >
</body>
</html>


