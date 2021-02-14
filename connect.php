<? 
$mysql_server = "ec2-52-7-168-69.compute-1.amazonaws.com"; // localhost is common on most hosts.

$mysql_user = "akbyftixfsaoax"; //  this is the name of your username of the server.

$mysql_password = "d7417177107231348bf0ff8258e7a4af5b03c71cc684dfbaa8bfa6768895a2dd"; // the password connected to the username. MAKE IT COMPLEX.

$mysql_database = "dbq90e1fhlhh5"; // the database name of where to connect to and where the information will be help.

$connection = mysql_connect("$mysql_server","$mysql_user","$mysql_password") or die ("Unable to establish a DB connection");

$db = mysql_select_db("$mysql_database") or die ("Unable to establish a DB connection");
?>
