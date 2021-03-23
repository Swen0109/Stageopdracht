<?php
        header("location: ../index.php");
        $naam=$_POST["Name"];
        require("../../functies.php");
		createProject($naam);
?>