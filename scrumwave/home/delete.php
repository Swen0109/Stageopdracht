<?php
	require("../functies.php");
	$projects = getAllProjects();
	$deleten = getProjectById($_GET["id"]);
	include("../templates/header.php");
?>

<style>
 div{
    margin-top:150px;
 }
</style>

<div class="alert alert-dark text-center" role="alert">
    <strong>Delete</strong>&nbsp; &nbsp;Weet je zeker dat je dit project wilt verwijderen?
</div>

<form class="text-center"action="homeController/deleteProject.php">
	<input type="text" name ="id" value="<?php echo $_GET["id"]?>" hidden>
	<button class="btn btn-danger" type="submit">Delete</button>
	<a class="btn btn-info" href="../home/index.php">Cancel</a>
</form>
