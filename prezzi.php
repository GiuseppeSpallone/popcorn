<?php
include 'check/stampa_prezzi.php';
?>

<html>

<head>
    <title>Popcorn</title>
    <link rel="icon" href="/logo/Pop.png" type="image/png" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="css/bootstrap.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="css/reset.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/sale.css">
</head>

<body>
    <?php
    $selector = 2;
    include 'nav.php';
    ?>
    <br> <br> <br>
    <div class="cd-pricing-container cd-has-margins">
        <div class="cd-pricing-switcher">
            <p class="fieldset">
                <input type="radio" name="duration-2" value="monthly" id="monthly-2" checked>
                <label for="monthly-2">Biglietti</label>
                <input type="radio" name="duration-2" value="yearly" id="yearly-2">
                <label for="yearly-2">Abbonamenti</label>
                <span class="cd-switch"></span>
            </p>
        </div>

        <ul class="cd-pricing-list cd-bounce-invert">
            <li>
                <ul class="cd-pricing-wrapper">
                    <li data-type="monthly" class="is-visible">
                        <header class="cd-pricing-header">
                            <h2>Feriali</h2>

                            <div class="cd-price">
                                <span class="cd-currency">&euro;</span>
                                <span class="cd-value">
                                    <?php echo $prezzo['feriale']; ?>
                                </span>
                            </div>
                        </header>
                    </li>

                    <li data-type="yearly" class="is-hidden">
                        <header class="cd-pricing-header">
                            <h2>3 Ingressi</h2>

                            <div class="cd-price">
                                <span class="cd-currency">&euro;</span>
                                <span class="cd-value">
                                    <?php echo $prezzo['3ingressi']; ?>
                                </span>
                            </div>
                        </header>
                    </li>
                </ul>
            </li>

            <li class="cd-popular">
                <ul class="cd-pricing-wrapper">
                    <li data-type="monthly" class="is-visible">
                        <header class="cd-pricing-header">
                            <h2>Festivi</h2>
                            <div class="cd-price">
                                <span class="cd-currency">&euro;</span>
                                <span class="cd-value">
                                    <?php echo $prezzo['festivo']; ?>
                                </span>
                            </div>
                        </header>
                    </li>

                    <li data-type="yearly" class="is-hidden">
                        <header class="cd-pricing-header">
                            <h2>5 Ingressi</h2>

                            <div class="cd-price">
                                <span class="cd-currency">&euro;</span>
                                <span class="cd-value">
                                    <?php echo $prezzo['5ingressi']; ?>
                                </span>
                            </div>
                        </header>
                    </li>
                </ul>
            </li>

            <li>
                <ul class="cd-pricing-wrapper">
                    <li data-type="monthly" class="is-visible">
                        <header class="cd-pricing-header">
                            <h2>3D</h2>

                            <div class="cd-price">
                                <span class="cd-currency">&euro;</span>
                                <span class="cd-value">
                                    <?php echo $prezzo['3d']; ?>
                                </span>
                            </div>
                        </header>
                    </li>

                    <li data-type="yearly" class="is-hidden">
                        <header class="cd-pricing-header">
                            <h2>10 Ingressi</h2>

                            <div class="cd-price">
                                <span class="cd-currency">&euro;</span>
                                <span class="cd-value">
                                    <?php echo $prezzo['10ingressi']; ?>
                                </span>
                            </div>
                        </header>
                    </li>
                </ul>
            </li>
        </ul>
    </div>

    <div class="container">
        <div class="col-md-3 col-sm-6 col-xs-12 float-shadow">
            <div class="price_table_container">
                <div class="price_table_heading">Sala 1</div>
                <div class="price_table_body">
                    <div class="price_table_row cost warning-bg"><strong>100</strong><span>Posti</span></div>
                </div>
            </div>
        </div>

        <div class="col-md-3 col-sm-6 col-xs-12 float-shadow">
            <div class="price_table_container">
                <div class="price_table_heading">Sala 2</div>
                <div class="price_table_body">
                    <div class="price_table_row cost primary-bg"><strong>150</strong><span>Posti</span></div>
                </div>
            </div>
        </div>

        <div class="col-md-3 col-sm-6 col-xs-12 float-shadow">
            <div class="price_table_container">
                <div class="price_table_heading">Sala 3</div>
                <div class="price_table_body">
                    <div class="price_table_row cost success-bg"><strong>200</strong><span>Posti</span></div>
                </div>
            </div>
        </div>

        <div class="col-md-3 col-sm-6 col-xs-12 float-shadow">
            <div class="price_table_container">
                <div class="price_table_heading">Sala 4</div>
                <div class="price_table_body">
                    <div class="price_table_row cost info-bg"><strong>350</strong><span>Posti</span></div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script src="js/modernizr.js"></script>
    <script src="js/bootstrap.js"></script>
    <script src="js/main.js"></script>

</body>

</html>
