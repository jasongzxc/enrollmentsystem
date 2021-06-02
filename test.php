<?php
    if(isset($_POST['submit'])){
        echo $_POST['date'];
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="test.php" method="post">
        <input type="date" name="date" id="">
        <input type="submit" name="submit" value="Submit">
    </form>
</body>
</html>