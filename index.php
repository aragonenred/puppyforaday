<?php  
    $url = 'https://dog.ceo/api/breeds/image/random';
    $resultado = file_get_contents($url, false);
    $dog = json_decode($resultado);
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tu perrito del día</title>
    <link rel="stylesheet" href="css/styles.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:wght@100&display=swap" rel="stylesheet">
</head>
<body>

    <header>
    </header>
    <main>
        <h1>A puppy for each day</h1>
        <div class='imagen'>
            <img src="<?php echo $dog->{'message'}; ?>" alt="">
        </div>
    </main>
    <footer>
        <a href="https://github.com/aragonenred">aragonenred@gmail.com</a>
    </footer>
</body>
</html>