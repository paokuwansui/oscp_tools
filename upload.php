<!DOCTYPE html>
<html lang="zh">
<head>
    <meta charset="UTF-8">
</head>
<body>
    <form action="" method="post" enctype="multipart/form-data">
        <input type="file" name="fileToUpload" required>
        <input type="submit" value="upload">
    </form>
    <?php
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $target_dir = '/tmp/';
        $target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
        move_uploaded_file($_FILES["file"]["tmp_name"], $target_file);
    }
    ?>
</body>
</html>
