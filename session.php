<?php  
session_start();
function Message()
{
if(isset($_SESSION["ErrorMessage"]))
{
	$Output="<div class=\"alert alert-danger\">";
	$Output.=htmlentities($_SESSION["ErrorMessage"]);
	$Output.="</div>";
	$_SESSION["ErrorMessage"]=null;//for first tym it will be null


return $Output;
}
}
?>