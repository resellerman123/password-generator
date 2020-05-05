<?php
    include_once'config.php';

    $sql='SELECT * FROM web';
    $result = $con->query($sql);

    $click = 0;

    if(isset($_POST['generate'])){
        $click++;
        $n=28;
        
        function getPassword($n) {
        $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
        $randomString = '';

        for ($i = 0; $i < $n; $i++) {
            $index=rand(0, strlen($characters) - 1); $randomString .=$characters[$index]; 
        } return $randomString; 
    } 
    $password=getPassword($n); 
    }
    
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" href="style.css" type="text/css">
    <meta charset="UTF-8">

    <title>Password Generator</title>
</head>

<body>
    <form action="" align=center method="post">
        <h2>Password Generator</h2>
        <?php if($click == 0): ?>
        <input type="text" placeholder="P@SSW@RD" name="password" disabled>
        <?php else: ?>
        <input type="text" value="<?php echo $password; ?>" name="password">
        <?php endif; ?>
        <button type="submit" name="generate">Generate</button>
    </form>
</body>

</html>
