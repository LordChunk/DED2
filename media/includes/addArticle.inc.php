<?php
if($_POST["queryTitle"] && $_POST["queryText"] && $_POST["queryDate"])
{
    //Insert DB conn
    require_once $_SERVER['DOCUMENT_ROOT'] . "/media/includes/db.inc.php";
    
    $queryTitle = $_POST["queryTitle"];
    $queryText = $_POST["queryText"];
    $queryDate = $_POST["queryDate"];

    //Create prepared statement 
    if($stmt = $conn->prepare("INSERT INTO article (title, text, date) VALUES (?, ?, ?)")) 
    {
        //Bind parameters
        $stmt->bind_param("sss", $queryTitle, $queryText, $queryDate);

        //Execute query
        $stmt->execute();

        //Bind result to variable
        // $stmt->bind_result($result);

        //fetch vars
        // $stmt->fetch();

        //close statement
        $stmt->close();
    }

    //close mysql connection
    $conn->close();
}
else {
    die("Title, date or time has not been set.");
}