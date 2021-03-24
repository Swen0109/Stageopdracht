<?php
    require( "../../functies.php" );

    updateAllFromProject( $_POST, $_POST["ProjectId"] );
    header( "Location: ../index.php" );
?>