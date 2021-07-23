<?php  
    $url = 'https://dog.ceo/api/breeds/list/all';
    $resultado = json_decode(file_get_contents($url, false));
    $breeds = array();

    foreach($resultado->{'message'} as $breed=>$subbreed){
        array_push($breeds, $breed);
    }
    $breed = $breeds[mt_rand(0, count($breeds)-1)];

    $url = 'https://dog.ceo/api/breed/' . $breed . '/images/random';
    $resultado = file_get_contents($url, false);
    $dogImg = json_decode($resultado);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>A puppy for each day </title>
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
            <img id='img' src="<?php echo $dogImg->{'message'}; ?>" alt="">
        </div>
        <h3><?php echo $breed; ?></h3>
    </main>
    <footer>
        <a href="https://github.com/aragonenred">aragonenred@gmail.com</a>
        <script src="js/main.js"></script>
    </footer>
</body>
</html>