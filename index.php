<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <title>Document</title>
</head>
<body>
    <div class="container">
        <div class="jumbotron"><h1>CRUD Operation</h1></div>
    </div>
    <!-- Create or submit to database -->
    <div class="container">
        <form action="userData.php"method="post">
            <input type="text"  name="username" placeholder="usernmae"> <br>
            <input type="email" name="email" placeholder="email"><br>
            <input type="text" name="password" placeholder="password"><br>
            <input type="submit" value="ADD User">
            <a href="show.php">Show Data</a>
        </form>
    </div>

</body>
</html>

