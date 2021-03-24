<?php
    require( "../../functies.php" );

    createTaskInfo($_POST, $_POST["taskId"]);
    header( "Location: ../index.php" );
?>