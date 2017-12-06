<?php
$con=mysql_connect("localhost","root","");
if(!con)
{
die('could not connect'.mysql_error());
}
mysql_select_db("librarydb",$con);
$sql=mysql_query("SELECT * FROM library where isbn='$_POST[isbn]'");
if(mysql_num_rows($sql)<=0)
{
$sql="INSERT INTO library(isbn,name,aname,rnumber)VALUES('$_POST[isbn]','$_POST[name]','$_POST[aname]','$_POST[rnumber]')";
if(!mysql_query($sql,$con))
{
die('error:'.mysql_error());
}
echo"<script>alert('REGISTER SUCCESSFULLY')</script>";
echo '<meta http-equiv="refresh" content="0; URL=menu.html" />';
}
else
{
echo"<script>alert('ISBN NUMBER IS ALREADY PRESENTED')</script>";
echo '<meta http-equiv="refresh" content="0; URL=addbook.html" />';
}
?>