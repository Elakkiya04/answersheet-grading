<?php
session_start();
if(!isset($_SESSION['uname']))
{
    header("Location: index.php");
}
?>

<form class="gap-2 col-4 p-3 mx-auto "  action="userform.php">
    <button class="btn btn-outline-success my-2 my-sm-0" type="submit" ><b>Link to user form</b></button>
</form>