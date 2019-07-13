1. Querry for All media on Index page

SELECT media.mediaID, mediatype.mediaTypeName, mediastatus.status, genre.genre, media.title, author.authorLastName, author.authorFirstName, media.isbn_ean, publisher.publisherName 
FROM media 
INNER JOIN genre ON media.FK_genre=genre.genreId 
INNER JOIN author ON media.FK_author=author.authorId 
INNER JOIN publisher ON media.FK_publisher=publisher.publisherID 
INNER JOIN mediatype ON media.FK_mediatype=mediatype.mediaTypeId 
INNER JOIN mediastatus ON media.FK_status=mediastatus.statusId 
ORDER BY `media`.`mediaID` ASC
____________________________________________

