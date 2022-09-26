<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="test2.php" method="post">
        <input type="radio" value=1 name="answ" id="1"><br>
        <input type="radio" value=2 name="answ" id="2"><br>
        <input type="radio" value=3 name="answ" id="3"><br>
        <button type="submit">submit</button>

    </form>
    <?php 
    // echo $_SERVER['REQUEST_METHOD'];
    echo $_SERVER['SCRIPT_NAME'];

    ?>
</body>

</html>