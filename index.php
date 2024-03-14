<!DOCTYPE html>
<html lang="cs">

<head>
    <title>ArusShop</title>
    <link href="css/style.css" rel="stylesheet" />
    <link rel="icon" href="img/logo/logo.png">
    <meta name="description" content="ArusShop">
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="author" content="Jan Černý" />
    <script src="https://kit.fontawesome.com/afcc9b0842.js" crossorigin="anonymous"></script>
</head>

<body>
    <header>
        <a href="." title="ArusShop" style="grid-area:logo"><img src="img/logo/logo.png" alt="Shop logo"></a>
        <form action="/search" class="search-field" method="get" style="grid-area:search-field; margin:auto">
            <i class="fa-solid fa-magnifying-glass"></i>
            <input aria-label="Disk, RAM, AMD..." id="fulltext" maxlength="200" placeholder="Disk, RAM, AMD..." type="search" value="">
            <button class="btn btn-primary fulltext__btn cancel"><span class="btn__content">Hledat</span></button>
        </form>
        <a href="." style="grid-area:user"><i class="fa-solid fa-circle-user"></i></a>
        <a href="." style="grid-area:shopping-card"><i class="fa-solid fa-cart-shopping"></i></a>
    </header>

    <main>
        <?php
        require_once "php/autoloader.php";
        $loader = new Loader;
        $loader->load("getContent");
        $page = new getContent();
        $page->get_content();
        $page->get_products()
        ?>
    </main>

    <footer>
        <a href="." style="grid-area:contact"><i class="fa-solid fa-phone">
                <p>Kontakty</p>
            </i></a>
        <a href="." style="grid-area:services"><i class="fa-solid fa-screwdriver-wrench">
                <p>Služby</p>
            </i></a>
        <a href="." style="grid-area:point-of-sale"><i class="fa-solid fa-location-dot">
                <p>Prodejny a výdejní místa</p>
            </i></a>
    </footer>
</body>

</html>


<?php


?>