<?php
  echo <<<_END
<html lang="en-us"><head><title>PHP Form Upload</title></head><body>
<form method="post" action="upload.php" enctype="multipart/form-data">
Select File: <input type="file" name="filename" size="10">
<input type="submit" value="Upload">
</form>
_END;

  if ($_FILES) {
    $name = $_FILES['filename']['name'];
    move_uploaded_file($_FILES['filename']['tmp_name'], $name);
    echo "uploaded image '$name'<br><img src='$name' alt='Uploaded Image'>";
  }

  echo "</body></html>";