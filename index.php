<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<?php
if (!isset($_POST['a']) && !isset($_POST['b'])):
    ?>
    <h1>Hello world</h1>
    <form action="/" method="post">
        <input type="text" name="a">
        <input type="text" name="b">
        <input type="submit">
    </form>
<?php else:
    echo 'r'. $_POST['a'] + $_POST['b'];
endif;
?>
</body>
</html>


