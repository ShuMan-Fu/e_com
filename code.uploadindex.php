<?php
include "code.upload.php";
?>

<!DOCTYPE html>
<html> 
<title>Image test upload</title>

<div class="container">
    <h1>Upload Image for Store</h1>
    <div class="wrapper">
        <!-- File Upload-->
        <form action="upload.php" method="post" enctype="multipart/form-data">
            <label>Select Image File:</label>
            <input type="file" name="image">
            <input type="submit" name="submit" value="Upload">
        
            <input type="submit" name="submit" class="btn-primary" value="Upload">
        </form>

        
    </div>
</div>

</html>