<!doctype html>
<html lang="en">
<head>

</head>
<body>
  <form action="uploadpictures.inc.php" method="post" enctype="multipart/form-data">
    <input type="file" id="file" name="files[]" multiple="multiple" accept="image/*" />
  <input type="submit" value="Upload Pictures" />
  
	</form>

<form action="uploadvideos.inc.php" method="post" enctype="multipart/form-data">
    <input type="file" id="file" name="file" />
    <input type="submit" value="Upload Video" name="submit"/>
</form>

<form action = "uploadmusic.inc.php" method = "post" enctype="multipart/form-data">
<input type = "file" id = "file" name = "file"/>
<input type = "submit" value = "Upload Music" name = "submit"/>
</form>

</body>
</html>