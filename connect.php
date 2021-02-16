<? 
$mysql_server = "sql106.byethost10.com"; // localhost is common on most hosts.

$mysql_user = "b10_27940036"; //  this is the name of your username of the server.

$mysql_password = "***********!"; // the password connected to the username. MAKE IT COMPLEX. (removed for security)

$mysql_database = "b10_27940036_mafiadays"; // the database name of where to connect to and where the information will be help.

$connection = mysql_connect("$mysql_server","$mysql_user","$mysql_password") or die ("Unable to establish a DB connection");

$db = mysql_select_db("$mysql_database") or die ("Unable to establish a DB connection");
?>
