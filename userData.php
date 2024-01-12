<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP File</title>

</head>

<body>
    <p>Welcome <?php echo $_GET["fName"]; ?></p>
    <p>Your email <?php echo $_GET["email"]; ?></p>
    <p>You're from <?php echo $_GET["country"]; ?></p>
    <div>Your message was: <?php echo $_GET["message"]; ?></div>

</body>

</html>