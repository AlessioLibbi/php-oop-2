<?php
require_once __DIR__ . "/Models/Prodotti.php";
require_once __DIR__ . "/Models/Categoria.php";
require_once __DIR__ . "/Models/Animali.php";
require_once __DIR__ . "/Models/Cibi.php";
$array_prodotti = [
    new Prodotti('Croccantini mix', "20$", new Categoria("cibo"), "https://wallpaperwaifu.com/wp-content/uploads/2021/04/illidan-stormrage-world-of-warcraft-thumb-1500x844.jpg", new Animali("Cane", "maschio"), "delizioso"),
    new Prodotti('Lettiera', "50$", new Categoria("cuccia"), "https://wallpaperwaifu.com/wp-content/uploads/2021/04/illidan-stormrage-world-of-warcraft-thumb-1500x844.jpg", new Animali("Gatto", "Femmina")),
    new Prodotti('Pallina', "10$", new Categoria("gioco"), "https://wallpaperwaifu.com/wp-content/uploads/2021/04/illidan-stormrage-world-of-warcraft-thumb-1500x844.jpg", new Animali("Cane", "Femmina")),
    new Prodotti('Striscette di carne', "70$", new Categoria("cibo"), "https://wallpaperwaifu.com/wp-content/uploads/2021/04/illidan-stormrage-world-of-warcraft-thumb-1500x844.jpg", new Animali("Cane", "maschio"), "superbuono"),
    new Prodotti('Casetta media', "90$", new Categoria("cuccia"), "https://wallpaperwaifu.com/wp-content/uploads/2021/04/illidan-stormrage-world-of-warcraft-thumb-1500x844.jpg", new Animali("Gatto", "Maschio")),
    new Prodotti('Fish and Chips', "20$", new Categoria("cibo"), "https://wallpaperwaifu.com/wp-content/uploads/2021/04/illidan-stormrage-world-of-warcraft-thumb-1500x844.jpg", new Animali("cane", "maschio"), "buono"),
    new Prodotti('Casetta piccola', "30$", new Categoria("cuccia"), "https://wallpaperwaifu.com/wp-content/uploads/2021/04/illidan-stormrage-world-of-warcraft-thumb-1500x844.jpg", new Animali("cane", "maschio")),
    new Prodotti('Cibo strano', "20$", new Categoria("cibo"), "https://wallpaperwaifu.com/wp-content/uploads/2021/04/illidan-stormrage-world-of-warcraft-thumb-1500x844.jpg", new Animali("cane", "maschio")),
];
