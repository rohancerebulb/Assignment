<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Upload Image</title>
    </head>
    <body>
       <form action="uploadimage.php" method="post" enctype="multipart/form-data">
            <input type="file" name="fileToUpload" required>
            <input type="submit" value="Upload 100x100 Image" name="submit">
        </form>
        <?php
            error_reporting(0);
            $targetDir = "uploads/";
            // $_FILES is a superglobal array that stores information about uploaded files. The information stored in $_FILES includes file name, file type, file size, file temporary location, error code, and more.
            $file = $_FILES["fileToUpload"];
            // here, basename() function is used to get the base name of the file. for example if the file name is "image.jpg" then it will return "image.jpg".
            $targetFile = $targetDir . basename($file["name"]);
            // pathinfo() function is used to return information about a file path. it contain five parameters, first is file name, second is PATHINFO_DIRNAME, third is PATHINFO_BASENAME, fourth is PATHINFO_EXTENSION, fifth is PATHINFO_FILENAME.
            // $fileType is used to get the extension of the file. for example if the file name is "image.jpg" then it will return "jpg".
            $fileType = strtolower(pathinfo($targetFile, PATHINFO_EXTENSION));
            $fileSize = $file["size"];
            // getimagesize() function is used to get the size of the image. it contain two parameters, first is file name and second is image information.
            $imageInfo = getimagesize($file["tmp_name"]);
            $width = $imageInfo[0];
            $height = $imageInfo[1];
            // Allowed file types
            $allowedTypes = ["jpg", "jpeg", "png", "gif"];
            // Ensure file is an image
            if (!$imageInfo) {
                die("Error: The uploaded file is not an image.");
            }
            // Check dimensions (100x100 pixels)
            if ($width != 100 || $height != 100) {
                die("Error: Only 100x100 pixel images are allowed.");
            }
            // Check file type
            if (!in_array($fileType, $allowedTypes)) {
                die("Error: Only JPG, JPEG, PNG, and GIF files are allowed.");
            }
            // Limit file size to 500KB (adjust if needed)
            if ($fileSize > 500 * 1024) {
                die("Error: File size must be less than 500KB.");
            }
            // Create uploads folder if it doesn't exist
            if (!is_dir($targetDir)) {
                mkdir($targetDir, 0777, true);
            }
            // Upload file
            if (move_uploaded_file($file["tmp_name"], $targetFile)) {
                echo "File uploaded successfully! <br>";
                echo "<img src='$targetFile' alt='Uploaded Image'>";
            } else {
                echo "Error uploading file.";
            }
        ?>
    </body>
</html>