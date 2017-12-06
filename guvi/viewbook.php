<html>
<head><title>view book details</title></head>
<body bgcolor="skyblue"><center>
<?php
echo "<h2>VIEW BOOK DETAILS</h2><br><br><br><br><br>";
$con=mysql_connect("localhost","root","");
if(!$con)
{
die('could not connect'.mysql_error());
}
mysql_select_db("librarydb",$con);//10
$sql=mysql_query("SELECT * FROM library where isbn='$_POST[isbn]'");
if(mysql_num_rows($sql)>0)
{
echo '<table border="5" color="voilet">';
WHILE($row=mysql_fetch_array($sql)):
echo '<tr><td>ISBN NUMBER</td>';
echo '<td>';
echo "$row[0]";
echo'</td></tr><tr><td>NAME</td>';
echo '<td>';
echo "$row[1]";
echo'</td></tr><tr><td>AUTHOR NAME</td>';
echo '<td>';
echo "$row[2]";
echo'</td></tr><tr><td>RACK NUMBER</td>';
echo '<td>';
echo "$row[3]";
echo'</td>';
echo '</tr>';
endwhile;
echo'</table>';

}
else
{
echo"<h1> ISBN NUMBER IS NOT PRESENT</h1>";
}
echo'<font size="20"><br><br><a href="menu.html">close</a><font>';
mysql_close($con);
?>
</b>
</center>
</body>
</html>
