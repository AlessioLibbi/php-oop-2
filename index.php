<?php require_once __DIR__ . "/DB.php"  ?>
<?php require_once __DIR__ . "/Models/Prodotti.php" ?>
<?php require_once __DIR__ . "/Models/Cibi.php" ?>


<?php include __DIR__ . "/Partials/Head.php" ?>

<body>

    <div class="container-fluid">
        <div class="container mt-5">
            <div class="row">
                <?php foreach ($array_prodotti as $prodotto) { ?>
                    <div class="col d-flex mb-5">
                        <div class="card " style="width: 18rem;">
                            <img src="<?php echo $prodotto->poster ?>" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title"><?php echo $prodotto->nome ?></h5>
                                <p class="card-text"><?php echo $prodotto->categoria->nome ?></p>
                                <p class="card-text"><?php echo $prodotto->animale->genere ?> <?php echo $prodotto->animale->tipo ?></p>
                                <p><?php if (isset($prodotto->sapore)) {
                                        echo $prodotto->sapore;
                                    } else if (isset($prodotto->colore)) {
                                        echo $prodotto->colore;
                                        echo "<br>";
                                        echo $prodotto->altezza;
                                    } else {
                                        echo $prodotto->peso;
                                        echo "<br>";
                                        echo $prodotto->dimensioni;
                                    } ?></p>
                                <p><?php echo $prodotto->eatable ?></p>
                                <a href="#" class="btn btn-primary"><?php echo $prodotto->prezzo ?></a>

                            </div>
                        </div>
                    </div>
                <?php } ?>
            </div>
        </div>
    </div>

    <?php include __DIR__ . "./Partials/Footer.php" ?>