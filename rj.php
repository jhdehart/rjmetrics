<?php

mysql_connect("localhost", "rjmetrics", "rjmetrics") or die(mysql_error());
mysql_select_db("rjmetrics") or die(mysql_error());

$resultset = mysql_query("SELECT hello FROM rjmetrics.rjmetrics")
or die(mysql_error());  

// store the record of the "example" table into $row
$row = mysql_fetch_array( $resultset );

echo $row['hello'];
?>
