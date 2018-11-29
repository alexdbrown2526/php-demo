<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="styles.php" media="screen">
    <title>PHP DEMO</title>
</head>
<body>
    <?php echo date("m.d.Y") ?>
    <br/>
    <ul>
    <li>Welcome <?php echo $_POST ["name"]; ?>,
    Your email address is <?php echo $_POST ["email"]; ?>
    </li>
    </ul>
    <br/>

    <button action="index.php" type="submit">Back</button>


</body>
</html>