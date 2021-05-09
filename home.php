
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome</title>
    <link rel="stylesheet" href="first.css">
</head>
<body>
    </div> 
    <div class="text">
        <h1>"Welcome <?php
        session_start();
echo $_SESSION["user"];
?> "</h1>
        <button class="register"><a href="fill.html">Fill Startup Form Now</a></button>
    </div>
</body>
</html>