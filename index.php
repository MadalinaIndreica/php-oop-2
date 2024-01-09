<?php
require_once __DIR__ . '/Models/prodotto.php';
require_once __DIR__ . '/Models/categoria.php';
require_once __DIR__ . '/Models/cibo.php';
require_once __DIR__ . '/Models/gioco.php';
require_once __DIR__ . '/Models/cucce.php';

$cane = new Categoria('cane', 'dog.png');
$gatto = new Categoria('gatto', 'cat.png');


$prod1 = new Cibo('croccantini high quality', 23, 'croccantini.png', $cane, 'carne');
$prod1->set_image('assets/cibo-per-cani.jpg');

$prod2 = new Gioco('pallina', 10, 'pallina.png', $gatto, 5);
$prod2->set_image('assets/pallina.jpg');

$prod3 = new Cucce(' cuccia Sleepypets', 25, 'cuccia.png', $cane, 'blu');
$prod3->set_image('assets/cuccia.jpeg');

$prod4 = new Cibo('cibo umido', 7.99, 'umido.png', $gatto, 'carne');
$prod4->set_image('assets/cibo-gatto.jpeg');

$prod5 = new Gioco('corda', 9, 'corda.png', $cane, 5);
$prod5->set_image('assets/corda.webp');

$prod6 = new Cucce('cuccia', 15, 'cuccia.png', $gatto, 'beige');
$prod6->set_image('assets/cuccia-gatto.webp');
//var_dump($prod1,$prod2,$prod3);

$prodotti = [
    $prod1,
    $prod2,
    $prod3,
    $prod4,
    $prod5,
    $prod6


];

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="style/style.css">

</head>

<body>
    <div class="container">
        <h1 class="text-center text-white">My Pet Store</h1>
        <div class="row row-cols-3 mt-5">
            <?php foreach ($prodotti as $prodotto) { ?>
                <div class="col mb-5">
                    <div class="card text-center h-100" style="width: 18rem;">
                        <img src="<?php echo $prodotto->get_image() ?>" class="card-img-top " alt="">
                        <div class="card-body">
                            <h5 class="card-title text-capitalize"><?php echo $prodotto->nome ?></h5>
                            <p class="card-text"><?php echo $prodotto->prezzo ?></p>
                            <p> adatto a:
                                <?php echo $prodotto->categoria->nome ?></p>
                        </div>

                    </div>
                </div>
            <?php } ?>

        </div>

    </div>



</body>

</html>