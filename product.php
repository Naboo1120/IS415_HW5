<!DOCTYPE html>
<html><head><title> List of Customers </title></head><body>
<?php
$query = "select * from product";
if (! ( $database = mysql_connect( "mysql.wiu.edu:2546", "root", "qem44tad")))
    die( "could not connect to database </body> </html>");
if ( !mysql_select_db ( "test_db", $database))
    die( "could not open the classwork</body> </html>");
if (! ( $result = mysql_query ($query, $database)))
{ print ("Could not execute query! <br />");
    die (mysql_error() . "</body> </html>");
}
mysql_close ( $database); ?>
<h3> List Of Wine </h3><table border="1"><thead>
    <th> Wine ID</th>
    <th> Wine Name</th>
    <th> Location </th>
    <th> Rating </th>
    <th> Price </th>
    <?php
    for ( $counter = 0; $row = mysql_fetch_row ( $result ); $counter++)
    {
        print ( "<tr>");
        foreach ($row as $key => $value)
            print ("<td>$value</td>");
        print ("</tr>");
    }
    ?></table></body></html>
