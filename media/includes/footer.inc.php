<footer class="page-footer">
    <div class="container">
    <div class="row">
        <div class="col l6 s12">
        <h5 class="white-text"><?=$title?></h5>
        <p class="grey-text text-lighten-4"></p>
        </div>
        <div class="col l4 offset-l2 s12">
        <h5 class="white-text">Credits:</h5>
        <ul>
            <li><a class="grey-text text-lighten-3" href="https://material.io/icons/" target="_blank" rel="nofollow noopener">Google's Material Design</a></li>
            <li><a class="grey-text text-lighten-3"href="https://fontawesome.com/" target="_blank" rel="nofollow noopener">Fontawesome</a></li>
        </ul>
        </div>
    </div>
    </div>
    <div class="footer-copyright">
    <div class="container">
    © 2018 Niet Job van Ooik
    <a class="grey-text text-lighten-4 right" href="#!"></a>
    </div>
    </div>
</footer>

<!--Import jQuery before js with jQuery files-->
<script src="//code.jquery.com/jquery-3.2.1.min.js" integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4=" crossorigin="anonymous"></script>

<?php
$javaScript = [
    "//cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0-alpha.4/js/materialize.min.js",
    "//use.fontawesome.com/releases/v5.0.8/js/all.js",
    "/media/js/src/main.js",
    "/media/js/src/smoothScroll.js",
    // "/media/js/src/ajaxPageLoader.js",
    // "/media/js/src/nav.js",
    "/media/js/page/" . $uri . ".js",
];

foreach($javaScript as $script) {?>
    <script src="<?=$script?>" type="text/javascript"></script>

<?php
}
?>
</body>
</html>