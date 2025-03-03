<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>File Handling</title>
    </head>
    <body>
        <?php
            echo readfile("textdemo.txt");
            echo "<br/>";
            $filedata= fopen("textdemo.txt","r");
            echo fread($filedata,filesize("textdemo.txt"));
            echo "<br/>";
            rewind($filedata);
            echo fgets($filedata);
            rewind($filedata);
            echo "<br/>";
            echo fgetc($filedata);
            echo "<br/>";
            fclose($filedata);
            $filedata1= fopen("file.txt","r+");
            fseek($filedata1,0, SEEK_END);
            echo fwrite($filedata1," Rohan \n");
            echo "<br/>";
            rewind($filedata1);
            echo fread($filedata1,filesize("file.txt"));
            fclose($filedata1);
            // using r mode read only, if file is not present then show error, if file is present then read the data.
            // using r+ mode read/write only, if file is not present then show error, if file is present then read the data and write the data.
            // using w mode write only, if file is not present then create a file, if file is present then write the data and earse the previous data.
            // using w+ mode read/write only, if file is not present then create a file, if file is present then write the data and earse the previous data.
            // using a mode write only, if file is not present then create a file, if file is present then write the data at the end of the file.
            // using a+ mode read/write only, if file is not present then create a file, if file is present then write the data at the end of the file.
            // using x mode write only, if file is not present then create a file, if file is present then show error.
            // using x+ mode read/write only, if file is not present then create a file, if file is present then show error.
            // fopen function is used to open a file, it takes two parameters, first is file name and second is mode.
            // fread function is used to read the file, it takes two parameters, first is file name and second is size of the file.
            // fwrite function is used to write the file, it takes two parameters, first is file name and second is data to write.
            // fclose function is used to close the file, it takes one parameter, file name.
            // rewind function is used to set the file pointer to the beginning of the file, it takes one parameter, file name.
            // fseek function is used to set the file pointer to the specific location of the file, it takes three parameters, first is file name, second is location, third is mode.
            // file_exists function is used to check the file is present or not, it takes one parameter, file name.
            // unlink function is used to delete the file, it takes one parameter, file name.
            // copy function is used to copy the file, it takes two parameters, first is file name and second is new file name.
            // rename function is used to rename the file, it takes two parameters, first is file name and second is new file name.
            // file_get_contents function is used to read the file, it takes one parameter, file name.
            // file_put_contents function is used to write the file, it takes two parameters, first is file name and second is data to write.
            // filesize function is used to get the size of the file, it takes one parameter, file name.
            // feof function is used to check the end of the file, it takes one parameter, file name.
            // fgetc function is used to read the file character by character, it takes one parameter, file name.
            // fgets function is used to read the file line by line, it takes one parameter, file name.
        ?>
    </body>
</html>