
<?php
$data = simplexml_load_file("Proizvodi.xml");
$biljke = [];

foreach ($data->biljka as $biljka) {
    $slika = $biljka->slika;
    $naziv = $biljka->naziv;
    $opis = $biljka->opis;
    $cijena = $biljka->cijena;

    $biljke[] = [
        'slika' => $slika,
        'naziv' => $naziv,
        'opis' => $opis,
        'cijena' => $cijena
    ];
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>XML Projekt</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>

<body>
    <header>
        <div class="container nav-bar">
            <a href="index.html" class="logo">Leaf &amp; Petal</a>

            <ul class="nav-menu">
                <li class="nav-item">
                    <a href="index.html" class="nav-link">Shop</a>
                </li>

                <li class="nav-item">
                    <a href="about.html" class="nav-link">About</a>
                </li>
            </ul>

            <div class="hamburger">
                <span class="bar"></span>
                <span class="bar"></span>
                <span class="bar"></span>
            </div>
        </div>
    </header>

    <main class="container part" style="margin-top:10%;margin-bottom:10%;">
    <?php foreach ($biljke as $biljka) : ?>
            <div>
                <img src="<?php echo $biljka['slika']; ?>" alt="Biljka">
                <p class="naslov"><?php echo $biljka['naziv']; ?></p>
                <p class="opis"><?php echo $biljka['opis']; ?></p>
                <p class="cijena"><?php echo $biljka['cijena']; ?></p>
                <button class="button button1">Add to cart</button>
            </div>
        <?php endforeach; ?>
    </main>

    <footer>
        <p>Ana Ilić, JMBAG 0067475283</p>
        <p>XML programiranje, 2023</p>
    </footer>
    <script src="script.js"></script>
</body>

</html>
