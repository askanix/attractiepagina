<?php
session_start();
require_once 'admin/backend/config.php';
?>

<!doctype html>
<html lang="nl">

<head>
    <title>Attractiepagina</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link
        href="https://fonts.googleapis.com/css2?family=Oxanium:wght@400;600;700&family=Roboto:wght@300;400;700&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="<?php echo $base_url; ?>/css/normalize.css">
    <link rel="stylesheet" href="<?php echo $base_url; ?>/css/main.css">
    <link rel="icon" href="<?php echo $base_url; ?>/favicon.ico" type="image/x-icon" />
    <script src="https://kit.fontawesome.com/abf4d00304.js" crossorigin="anonymous"></script>
</head>

<body>

    <?php require_once 'header.php'; ?>
    <div class="container content">
        <aside>
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Officia modi dolore magnam! Iste libero voluptatum
            autem, sapiente ullam earum nostrum sed magnam vel laboriosam quibusdam, officia, esse vitae dignissimos
            nulla?
        </aside>
        <main>
            <div class="cards">
                <!-- <div class="card">

                    <div class="background"
                        style="background-image:url(img/attracties/jeriden-villegas-XrDVROYUTOs-unsplash.jpg">
                    </div>
                    <div class="attractie">
                        <div class="left">
                            <h1>adventureland</h1>
                            <h2>speedy xl</h2>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Facere </p>
                            <p class="light">120cm Minimale lengte</p>
                        </div>
                    </div>

                </div> -->

                <!-- <div class="card fastpass">
                    <div class="background"
                        style="background-image:url(img/attracties/jeriden-villegas-XrDVROYUTOs-unsplash.jpg">
                    </div>
                    <div class="attractie">
                        <div class="info">
                            <h1>adventureland</h1>
                            <h2>speedy xl</h2>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Facere </p>
                            <p class="light">120cm Minimale lengte</p>
                        </div>
                        <div class="info fphidden">
                            <p class="light">Deze attractie is alleen te bezoeken met een fastpass</p>
                            <div class="book">
                                <p class="light">boek nu en sla de wachtrij over</p>
                                <a href="">
                                    <i class="fa-solid fa-ticket"></i>
                                    Fast pass
                                </a>
                            </div>
                        </div>

                    </div>
                </div> -->

                <div class="card fastpass">
                    <div class="background"
                        style="background-image:url(img/attracties/jeriden-villegas-XrDVROYUTOs-unsplash.jpg">
                    </div>
                    <div class="attractie">
                        <div class="info">
                            <h1>adventureland</h1>
                            <h2>speedy xl</h2>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Facere </p>
                            <p class="light">120cm Minimale lengte</p>
                        </div>
                        <div class="info">
                            <p class="light">Deze attractie is alleen te bezoeken met een fastpass</p>
                            <div class="book">
                                <p class="light">boek nu en sla de wachtrij over</p>
                                <a href="">
                                    <i class="fa-solid fa-ticket"></i>
                                    Fast pass
                                </a>
                            </div>
                        </div>

                    </div>
                </div>

                <div class="card fastpass">
                    <div class="background"
                        style="background-image:url(img/attracties/jeriden-villegas-XrDVROYUTOs-unsplash.jpg">
                    </div>
                    <div class="attractie">
                        <div class="info">
                            <h1>adventureland</h1>
                            <h2>speedy xl</h2>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Facere </p>
                            <p class="light">120cm Minimale lengte</p>
                        </div>
                        <div class="info">
                            <p class="light">Deze attractie is alleen te bezoeken met een fastpass</p>
                            <div class="book">
                                <p class="light">boek nu en sla de wachtrij over</p>
                                <a href="">
                                    <i class="fa-solid fa-ticket"></i>
                                    Fast pass
                                </a>
                            </div>
                        </div>

                    </div>
                </div>
                
            </div>
    </div>
    </main>
    </div>

</body>

</html>