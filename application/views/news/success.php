<?php
 $uri = $_SERVER["REQUEST_URI"];
$uriArray = explode('/', $uri);
$process= $uriArray[4];
//echo $process;
?>
 
 <?
if($process=="edit"){
echo("<h2 >Data was Updated in database (news table)</h2>");
header('Refresh: 10; URL=../');
?>

<?
}
elseif ($process=="create"){
echo("<h2 >Data was Entered in database (news table)</h2>");
header('Refresh: 10; URL=../');
?>
<a href="../" >back to news</a>
<? } elseif($process=="delete"){
echo("<h2 >Data was Deleted from database (news table)</h2>");
header('Refresh: 10; URL=../');
}
?>
