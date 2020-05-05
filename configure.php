<?php
    include_once'config.php';

    $sqlCheck = 'Select * from web';
    if($con->query($sqlCheck)){
        echo '';
    } else{
        // sql to create table
        $sqlCreate = "CREATE TABLE `web` ( `web_id` INT NOT NULL AUTO_INCREMENT , `title` VARCHAR(255) NOT NULL , `url` VARCHAR(255) NOT NULL , PRIMARY KEY (`web_id`)) ENGINE = InnoDB;";
        $con->query($sqlCreate);
    }

    if(isset($_POST['save'])){
        $URL = $_POST['url'];
        $TITLE = $_POST['title'];
        
        $resultCheck = $con->query($sqlCheck);
        if ($resultCheck->num_rows > 0){
            $sql = "UPDATE `web` SET `title` = '$TITLE', `url` = '$URL' WHERE `web`.`web_id` = 1";
            $con->query($sql);
            header('Location: '. $URL);
        } else{
            $sql = "INSERT INTO `web` (`title`, `url`) VALUES ('$TITLE', '$URL')";
            $con->query($sql);
            header('Location: '. $URL);
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Configure Password Generator</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
   <form action="configure.php" align=center method="post">
   <h2>Configure</h2>
    <input type="text" placeholder="Website Title" name="title">
    <input type="text" placeholder="Website url" name="url" value="https://WEBSITE.com/password-generator">
    <button type="submit" name="save">Save</button>
    </form>
</body>
</html>
