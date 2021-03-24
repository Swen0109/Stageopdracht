<?php
    require( "../../functies.php" );

    $update = updateProgress($_POST);
    header( "Location: ../index.php" );
?>