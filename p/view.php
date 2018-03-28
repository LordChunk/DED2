<?php
require_once $_SERVER['DOCUMENT_ROOT'] . "/media/includes/nav.inc.php";


?>
<main class="container">
    <h1>List of all article elements</h1>

    <div class="row">
        <div class="col s12 m9 l6">
            <?php 
                require_once $_SERVER['DOCUMENT_ROOT'] . "/media/includes/viewAllArticles.inc.php";
            ?>
        </div>
    </div>

</main>
<?php
    require_once $_SERVER['DOCUMENT_ROOT'] . "/media/includes/footer.inc.php";
?>