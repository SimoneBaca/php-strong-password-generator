<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
</head>

<body>
    <div class="wrapper container mt-5 text-center">
        <h1 >Strong Password Generator</h1>
        <h3 >Genera una password Sicura</h3>
        <div class="card">
            <!--invio lunghezza password inserita al file index.php-->
            <form action="index.php" method="get">
                <label for="password_length">Lunghezza password:</label>
                <input type="number" id="password_length" name="password_length" min="1" max="100">
                <input class="" type="submit" value="Genera password">
            </form>
        </div>
      
</body>
</html>
<?php include 'functions.php'; ?>
