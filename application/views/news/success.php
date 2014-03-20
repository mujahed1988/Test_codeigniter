<?php
 $uri = $_SERVER["REQUEST_URI"];
$uriArray = explode('/', $uri);
$process= $uriArray[4];
//echo $process;
if($process=="edit"){
echo("<h1 >Data was Updated in database (news table)</h1>");
?>
<a href="../" >back to news</a>
<?
}
elseif ($process=="create"){
echo("<h1 >Data was Entered in database (news table)</h1>");
?>
<a href="../" >back to news</a>
<? } ?>