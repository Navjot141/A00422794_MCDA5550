<?php
include 'config_dbase.php';;
if(isset($_REQUEST['id']))
{
$id=$_REQUEST['id'];
$sql="delete from subcategory where id='$id'";
$qr=mysql_query($sql);
if(!$qr)
{
die('user not deleted'.mysql_error());		
}
}
if($_REQUEST['delete']=='delete')
{
$chid=$_REQUEST['chid'];
//print_r($chid);
foreach($chid as $v)
{	
$sql="delete from subcategory where id='$v'";
$qr=mysql_query($sql);	
}
}
header('location:managesubcategory.php?do=delete');
?>