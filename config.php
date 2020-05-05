<?php

    $myfile = fopen("data.txt", "r") or die("Unable to open file!");
    $fileContent = fread($myfile,filesize("data.txt"));
    $array = explode("\n", file_get_contents('data.txt'));
    fclose($myfile);

    if(empty($array[3])){
        header('Location: first-time.php');
    }

    if($con = mysqli_connect($array[0], $array[1], $array[2], $array[3])){
        
    }else{
        echo 'An Error Occurred';
    }
    
?>
