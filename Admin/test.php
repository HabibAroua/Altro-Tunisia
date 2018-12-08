<?php
if(isset($_POST['moveFile']))
{
    $fileName = $_FILES['fileName']['name'];
    $tempName = $_FILES['fileName']['tmp_name'];
    
    if(isset($fileName))
    {
        if(!empty($fileName))
        {
            $location = "picture/";
            if(move_uploaded_file($tempName, $location.$fileName))
            {
                echo 'File Uploaded';
            }
        }
    }
}
?>
<!DOCTYPE Html>
<html>
    <head>
        <title> PHP MOVE FILE </title>
    </head>
    <body>
    
        <form action="test.php" method="post" enctype="multipart/form-data">
            <input type="file" name="fileName"><br><br>
            <input type="submit" name="moveFile" value="Upload">
        </form>
    </body>
</html>