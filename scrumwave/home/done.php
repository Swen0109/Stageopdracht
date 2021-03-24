<?php
	require("../functies.php");
	$projects = getAllProjects();
	$done = getProjectById($_GET["id"]);
	include("../templates/header.php");
?>

<style>
    div{
        margin-top:150px;
    }
</style>

<div class="alert alert-dark text-center" role="alert">
    <strong></strong>&nbsp; &nbsp;Weet je zeker dat je klaar bent met dit project?
</div>
<form class="text-center" action="homeController/doneProject.php">
<input type="text" name ="id" value="<?php echo $_GET["id"]?>" hidden>
<button class="btn btn-success" type="submit">Bevestigen</button>
<a class="btn btn-danger" href="home/index.php">Annuleren</a>
</form>