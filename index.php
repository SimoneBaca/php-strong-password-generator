<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
</head>
<body>
    <!--invio lunghezza password inserita al file index.php-->
<form action="index.php" method="get">
  <label for="password_length">Lunghezza password:</label>
  <input type="number" id="password_length" name="password_length" min="1" max="100">
  <input type="submit" value="Genera password">
</form>
</body>

</html>
<?php include 'functions.php'; ?>






