<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>text with your name and color</title>
</head>
<body>
    <h1>hello please write your name and favourite color here in this inputs</h1>
    <form action="<?php echo $_SERVER["PHP_SELF"]; ?>" method="post"> 
       <input type="text" name="name" placeholder="write your name">
       <input type="text" name="favColor" placeholder="write your favourite color">
       <input type="submit">
    </form>
    <?php
    $name = $favColor = "";
    function validateInfos ($info){
        $info = trim($info);
        $info= stripslashes($info);
        $info=htmlspecialchars($info);
        return $info;
    }
    if($_SERVER["REQUEST_METHOD"] == "POST"){
    $name = validateInfos($_POST['name']);
    $favColor = validateInfos($_POST['favColor']);
    echo "</br>";
    echo "<span style= \"color: $favColor ;\">$name's favourite color is $favColor just like the color of this text</span>";
    }
    echo "</br>";
    echo "</br>";
    echo "</br>";
    echo "</br>";
    echo "<br>";
    ?>
</body>
</html>