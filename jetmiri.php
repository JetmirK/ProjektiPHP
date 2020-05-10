<!DOCTYPE html>
<?php
$cookie_name = "Italian";
$cookie_value = "Romana";
setcookie($cookie_name, $cookie_value, time() + (86400 * 30), "/");
?>

<html>
    <head>
        <meta charset="utf-8">
        

        <title>Italian Food</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://fonts.googleapis.com/css?family=Spectral:200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,500,700,900" rel="stylesheet">
        <link rel="stylesheet" href="css/fonts/bootstrap.min.css">
        <link rel="stylesheet" href="css/owl-carousel.css">
        <link rel="stylesheet" href="css/templatemo-style.css">
        <script src="js/vendor/modernizr-2.8.3-respond-1.4.2.min.js"></script>
    </head>

<body>


    


    <section class="page-heading">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h1>Italian Food</h1>
                    <p>Italian cuisine is a Mediterranean cuisine consisting of the ingredients, recipes and cooking techniques developed across the Italian Peninsula since the antiquity, and later spread around the world together with waves of Italian diaspora.
                    <?php
                    $string = 'Italian cuisine its difficulty, with many dishes having ten or more main ingredients.';
                    $patterns = array();
                    $patterns[0] = '/difficulty/';
                    $patterns[1] = '/ten/';
                    $patterns[2] = '/more/';
                    $replacements = array();
                    $replacements[2] = 'simplicity';
                    $replacements[1] = 'two';
                    $replacements[0] = 'four';
                    echo preg_replace($patterns, $replacements, $string); ?></p>
                </div>
            </div>
        </div>
    </section>



    <section class="Pizza">
        <div class="container">
            <div class="row">
                <div class="col-md-10 col-md-offset-1">
                    <div class="breakfast-menu-content">
                        <div class="row">
                            <div class="col-md-5">
                                <div class="left-image">
                                    <img src="img/Pizza.jpg" alt="Pizza">
                                </div>
                            </div>
        <div class="col-md-7">
		


		
                                <h2>Pizza <br> <h4>   <?php

?></h4></h2>
                                <div id="owl-breakfast" class="owl-carousel owl-theme">
                                    <div class="item col-md-12">
                                        <div class="food-item">
                                            <img src="img/Margherita.jpg" alt="">
                                            <div class="text-content">
                                                <h4>Margherita</h4>
                                                <p>Contains: tomato sauce, mozzarella,basil. It is the most famous pizza of all.
                                                <?php
                                                //how fast can a pizza be cooked
                                                $Pizzaa = new Pizza(10);
                                                unset($Pizzaa);

                                                class Pizza {
                                                    public $speed = 120;
    
                                                    function __construct ($speed) {
                                                        $this -> speed = $speed;
                                                    }
    
                                                    function __destruct() { //__destruct thirret automatikisht kur ne fshijme nje objekt te caktuar
                                                        print ("Italians can cook 5 Pizza Margherita per hour"); //fshihet objekti dhe printohet ky mesazh
                                                    }
                                                }
                                                ?>
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="item col-md-12">
                                        <div class="food-item">
                                            <img src="img/Romana.jpg" alt="">
                                            <div class="text-content">
											
												<!--Here we check if we have a cookie named italian-->
												<?php
												if(!isset($_COOKIE[$cookie_name])) {
													 echo "<h3>"."This '".$cookie_name . "' is not defined!"."</h3>";
												} else {
													 echo "";
												}

												?>
												<!--Delete the cookie italian-->

												<?php
												// Cakton daten e skadences nje ore me parë
												setcookie("Romana", "", time() - 3600);
												?>

                                                <h4>Romana</h4>
                                                <p>Contains: tomato sauce, mozzarella, anchovies. This pizza reminds me of an adorable lady that loved this pizza. <!--Here we check if the cookie named italian is deleted-->
												<?php
												if(!isset($_COOKIE[$cookie_name])) {
													 echo "This wasn't all about this ".$cookie_name;
												} else {
													 echo "This was all about this ".$cookie_name." named ".$_COOKIE[$cookie_name].".";
												}
												?>
												</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="item col-md-12">
                                        <div class="food-item">
                                            <img src="img/Vegetariana.jpg" alt="">
                                            
                                            <div class="text-content">
                                                <h4>Vegetariana</h4>
                                                <p>Contains: tomato sauce, mozzarella and veggies. In every pizzeria they use different vegetables: aubergines, courgettes, peppers, spinach, peas, carrots and so on</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
			</div>
        </div>
    </section>




    <section class="Pasta">
        <div class="container">
            <div class="row">
                <div class="col-md-10 col-md-offset-1">
                    <div class="Pasta">
                        <div class="row">
                            <div class="col-md-7">
                                <h2>Pasta</h2>
                                <div id="owl-lunch" class="owl-carousel owl-theme">
                                    <div class="item col-md-12">
                                        <div class="food-item">
                                            <img src="img/Carbonara.jpg" alt="">
                                            <div class="text-content">
                                                <h4>Carbonara</h4>
                                                <p>Carbonara is an Italian pasta dish from Rome made with egg, hard cheese, cured pork, and black pepper. The dish arrived at its modern form, with its current name, in the middle of the 20th century.</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="item col-md-12">
                                        <div class="food-item">
                                            <img src="img/Bolognese.jpg" alt="">
                                            <div class="text-content">
                                                <h4>Bolognese</h4>
                                                <p>Bolognese sauce is a meat-based sauce in Italian cuisine, typical of the city of Bologna. It is customarily used to dress tagliatelle al ragù and to prepare lasagne alla bolognese. </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="item col-md-12">
                                        <div class="food-item">
                                            <img src="img/Skillet.jpg" alt="">
                                            <div class="text-content">
                                                <h4>Skillet</h4>
                                                <p>Pasta, sausage, tomatoes and spinach cooked together for a quick and easy meal</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-5">
                                <div class="left-image">
                                    <img src="img/lunch_menu.jpg" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="Spaghetti">
        <div class="container">
            <div class="row">
                <div class="col-md-10 col-md-offset-1">
                    <div class="dinner-menu-content">
                        <div class="row">
                            <div class="col-md-5">
                                <div class="left-image">
                                    <img src="img/Spagheti.jpg" alt="">
                                </div>
                            </div>
                            <div class="col-md-7">
                                <h2>Spaghetti</h2>
                                <div id="owl-dinner" class="owl-carousel owl-theme">
                                    <div class="item col-md-12">
                                        <div class="food-item">
                                            <img src="img/Linguine.jpg" alt="">
                                            <div class="text-content">
                                                <h4>Linguine</h4>
                                                <p>Linguine is a type of pasta similar to fettuccine and trenette but elliptical in section rather than flat. </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="item col-md-12">
                                        <div class="food-item">
                                            <img src="img/Orecchiette.jpg" alt="">
                                            <div class="text-content">
                                                <h4>Orecchiette</h4>
                                                <p>Dreamcatcher squid ennui cliche chicharros nes echo  small batch jean ditcher meal...</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="item col-md-12">
                                        <div class="food-item">
                                            <img src="img/Fettuccine.jpg" alt="">
                                            <div class="text-content">
                                                <h4>Fettuccine</h4>
                                                <p>Fettuccine is a type of pasta popular in Roman and Tuscan cuisine.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="js/vendor/jquery-1.11.2.min.js"><\/script>')</script>

    <script src="js/vendor/bootstrap.min.js"></script>

    <script src="js/plugins.js"></script>
    <script src="js/main.js"></script>

    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js" type="text/javascript"></script>
    <script type="text/javascript">
    $(document).ready(function() {
        // navigation click actions 
        $('.scroll-link').on('click', function(event){
            event.preventDefault();
            var sectionID = $(this).attr("data-id");
            scrollToID('#' + sectionID, 750);
        });
        // scroll to top action
        $('.scroll-top').on('click', function(event) {
            event.preventDefault();
            $('html, body').animate({scrollTop:0}, 'slow');         
        });
        // mobile nav toggle
        $('#nav-toggle').on('click', function (event) {
            event.preventDefault();
            $('#main-nav').toggleClass("open");
        });
    });
    // scroll function
    function scrollToID(id, speed){
        var offSet = 0;
        var targetOffset = $(id).offset().top - offSet;
        var mainNav = $('#main-nav');
        $('html,body').animate({scrollTop:targetOffset}, speed);
        if (mainNav.hasClass("open")) {
            mainNav.css("height", "1px").removeClass("in").addClass("collapse");
            mainNav.removeClass("open");
        }
    }
    if (typeof console === "undefined") {
        console = {
            log: function() { }
        };
    }
    </script>
<?php
if(count($_COOKIE) > 0) {
    echo "Cookies are enabled in this page.";
} else {
    echo "Cookies are disabled in this page.";
}
?>
</div>
</body>
</html>
