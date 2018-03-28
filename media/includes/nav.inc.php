<?php
$title = "DB Insert and Select Concept";

$nav = [
    "Home" =>  ["fa-home", "/"],
    // "Login" =>  ["fa-home", "/"],
    "Add Item to DB" =>  ["fa-plus-square", "/p/add"],
    "View All DB Items" =>  ["fa-eye", "/p/view"],
];

$theme_colour = "#49bf67"; //HEX only

//Check for index page
$uri = strtolower(ucfirst(pathinfo($_SERVER['PHP_SELF'], PATHINFO_FILENAME)));
//All CSS files
$css = [
    "https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0-alpha.4/css/materialize.min.css",
    "https://fonts.googleapis.com/icon?family=Material+Icons",
    "/media/css/main.css",
    "/media/css/" . $uri . ".css"
];

?>

<!DOCTYPE html>
<html>
<head>
    <!--Custom tab colour -->
    <meta name="theme-color" content="<?=$theme_colour?>">
    <!--Fix broken icons -->
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <!--Let browser know website is optimized for mobile-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>

    <!--Search engine meta tags-->
    <meta name="author" content="Job van Ooik" />
    <meta name="robots" content="index, follow" />

    <?php
    //CSS loader
    foreach($css as $link) {?>
        <link rel="stylesheet" href="<?=$link?>">
    
    <?php
    }
    ?>

    <!--Load in CSS and JS without renderblocking -->
    <!-- <script async src="/media/js/loader.js" type="text/javascript"></script> -->

    <title><?=$title?></title>
</head>
<body>
<!--Navigation bar -->
<nav class="green lighten-1">
    <div class="nav-wrapper">
    
    <!--Nav trigger -->
    <a data-target="mobile" class="sidenav-trigger show-on-large left" href="#"><i class="material-icons">menu</i></a>
        
    <!-- Nav title -->
    <a href="/" class="brand-logo left"><?=$title?></a>


        <ul id="nav-mobile" class="right">
            <li>
                <a class="nav-dropdown-trigger" href="#" data-target="nav-dropdown">
                    <span class="hide-on-med-and-down">
                        Hallo <span class="red">ERROR 404 NAME NOT FOUND</span>
                    </span>
                    
                    <i class="material-icons right show-on-small">arrow_drop_down</i>
                </a>
            </li>
        </ul>
    </div>
</nav>

<!--nav dropdown items -->
<ul id="nav-dropdown" class="dropdown-content">
  <li><a href="#">Allemaal</a></li>
  <li class="divider"></li>
  <li><a href="#">Persoonlijke</a></li>
  <li class="divider"></li>
  <li><a href="#">Geheimpies</a></li>
</ul>

<!--Sidenav items-->
<ul class="sidenav" id="mobile">
    <?php
    foreach ($nav as $text => $info)
    {?>
        <li>

            <!--Paste URL -->
            <a href="<?=$info[1]?>">
            
                <!--Paste icon -->
                <i class="fas <?=$info[0]?>"></i>
                <!-- Paste name -->
                <?=$text?>
            </a>
        </li>
    <?php
    }
    ?>
</ul>