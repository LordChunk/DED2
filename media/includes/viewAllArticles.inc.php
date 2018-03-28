<?php 
require_once $_SERVER['DOCUMENT_ROOT'] . "/media/includes/db.inc.php";

//select the title date and text from the article database
if($result = $conn->query("SELECT title, date, text FROM article"))
{
    //For each selected row do this 
    while($row = $result->fetch_row())
    {?>
        <div class="section">
            <div class="row valign-wrapper">
                <h5 class="col s9">
                    <?php
                        //paste title
                        echo $row[0]
                    ?>
                </h5>
                <span class="col s3">
                    <?php
                        //paste date
                        echo $row[1]
                    ?>
                </span>
            </div>
            <p class="">
                <?php
                    //paste text 
                    echo $row[2]
                ?>
            </p>
        </div>
        <div class="divider"></div>
    <?php
    }
}

//Close SQL connection
$conn->close();
