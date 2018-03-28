<?php
require_once $_SERVER['DOCUMENT_ROOT'] . "/media/includes/nav.inc.php";
?>
<main class="container">
<?php
//Check for full form post
if($_POST["queryTitle"] && $_POST["queryText"] && $_POST["queryDate"])
{
    require_once $_SERVER['DOCUMENT_ROOT'] . "/media/includes/addArticle.inc.php";
}
?>
<h1>Add an Article to the Database</h1>
<!--Form just reloads page-->
<form method="POST">
    <div class="row">
        <!--Title input-->
        <div class="input-field col s6">
            <input type="text" name="queryTitle">
            <label for="first_name">Title</label>
        </div>
        
        <!--Date input-->
        <div class="input-field col s6">
            <input type="text" name="queryDate" class="datepicker">
            <label for="last_name">Date</label>
        </div>
    </div>
    <div class="row">
        <!--Text input-->
        <div class="input-field col s12">
            <textarea name="queryText" class="materialize-textarea"></textarea>
            <label for="queryText">Zo'n mooi lang verhaal over iets.</label>
        </div>

        <!--Submit button -->
        <div class="input-field col right">
            <button class="btn waves-effect waves-light right" type="submit" name="action">Submit
                <i class="material-icons right">send</i>
            </button>
        </div>
    </div>
</form>
</main>
<?php
    require_once $_SERVER['DOCUMENT_ROOT'] . "/media/includes/footer.inc.php";
?>
