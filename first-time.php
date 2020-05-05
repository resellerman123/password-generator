<?php
    if(isset($_POST['save'])){
        $localhost_data = $_POST['localhost'];
        $username_data = $_POST['username'];
        $password_data = $_POST['password'];
        $database_data = $_POST['database'];
        
        $myfile = fopen("data.txt", "w") or die("Unable to open file!");
        $data_local = $localhost_data . "\n";
        fwrite($myfile, $data_local);
        $data_user = $username_data . "\n";
        fwrite($myfile, $data_user);
        $data_pass = $password_data . "\n";
        fwrite($myfile, $data_pass);
        $data_data = $database_data . "\n";
        fwrite($myfile, $data_data);
        fclose($myfile);
        
        header('Location: configure.php');
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Setup</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
   <form action="first-time.php" align=center method="post">
   <h2>Setup</h2>
    <input type="text" placeholder="host" name="localhost" value="localhost">
    <input type="text" placeholder="Username" name="username">
    <input type="password" placeholder="Password" name="password">
    <input type="text" placeholder="Database" name="database">
    <button type="submit" name="save">Save</button>
    </form>
</body>
</html>