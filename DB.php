<?php
require_once __DIR__ . "/Models/Categoria.php";
require_once __DIR__ . "/Models/Animali.php";
require_once __DIR__ . "/Models/Cibi.php";
require_once __DIR__ . "/Models/Cuccie.php";
require_once __DIR__ . "/Models/Giochi.php";
$array_prodotti = [
    new Cibi("amaro", 'Croccantini mix', "20$", new Categoria("cibo"), "https://wallpaperwaifu.com/wp-content/uploads/2021/04/illidan-stormrage-world-of-warcraft-thumb-1500x844.jpg", new Animali("Cane", "maschio"), "delizioso"),
    new Cuccie("rosso", "30cm", 'Lettiera', "50$", new Categoria("cuccia"), "https://wallpaperwaifu.com/wp-content/uploads/2021/04/illidan-stormrage-world-of-warcraft-thumb-1500x844.jpg", new Animali("Gatto", "Femmina"), "non-mangiabile"),
    new Giochi("40g", "15cm*15cm", 'Pallina', "10$", new Categoria("gioco"), "https://wallpaperwaifu.com/wp-content/uploads/2021/04/illidan-stormrage-world-of-warcraft-thumb-1500x844.jpg", new Animali("Cane", "Femmina"), "non-mangiabile"),
    new Cibi("dolce", 'Striscette di carne', "70$", new Categoria("cibo"), "https://wallpaperwaifu.com/wp-content/uploads/2021/04/illidan-stormrage-world-of-warcraft-thumb-1500x844.jpg", new Animali("Cane", "maschio"), "superbuono",),
    new Cuccie("black-white", "50cm", 'Casetta media', "90$", new Categoria("cuccia"), "https://wallpaperwaifu.com/wp-content/uploads/2021/04/illidan-stormrage-world-of-warcraft-thumb-1500x844.jpg", new Animali("Gatto", "Maschio"), "non-mangiabile"),
    new Cibi("floreale", 'Fish and Chips', "20$", new Categoria("cibo"), "https://wallpaperwaifu.com/wp-content/uploads/2021/04/illidan-stormrage-world-of-warcraft-thumb-1500x844.jpg", new Animali("cane", "maschio"), "buono"),
    new Cuccie("viola", "100cm", 'Casetta piccola', "30$", new Categoria("cuccia"), "https://wallpaperwaifu.com/wp-content/uploads/2021/04/illidan-stormrage-world-of-warcraft-thumb-1500x844.jpg", new Animali("cane", "maschio"), "non-mangiabile"),
    new Cibi("salmastro", 'Cibo strano', "20$", new Categoria("cibo"), "https://wallpaperwaifu.com/wp-content/uploads/2021/04/illidan-stormrage-world-of-warcraft-thumb-1500x844.jpg", new Animali("cane", "maschio"), "mangiabile"),
];
