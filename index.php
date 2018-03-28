<?php
require_once "media/includes/nav.inc.php";
?>
<!-- Body -->

<main>
    <section class="container links">
        <div class="row">
            <?php
            //Paste item and corresponding icon
            foreach ($nav as $text => $info)
            {
                //Check for Home item 
                if($text != "Home")
                {?>
                <a  class="block col s4 l4" 
                    href="<?=$info[1]?>">
                    <div>
                        <i class="fas <?=$info[0]?>"></i>
                        <h2><?=$text?></h2>
                    </div>
                </a>
            
            <?php
                }
            }?>
        </div>
    </section>
</main>
<?php
    require_once "media/includes/footer.inc.php";
?>
