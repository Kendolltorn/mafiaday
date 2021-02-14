<? 
$mysql_server = "ec2-67-202-63-147.compute-1.amazonaws.com"; // localhost is common on most hosts.

$mysql_user = "brozlpvznlqhjo"; //  this is the name of your username of the server.

$mysql_password = "31cb511819fd5f9108372fdb7bdc8e4c2bcbb813dd7076a82eaaced410b4e8ed"; // the password connected to the username. MAKE IT COMPLEX.

$mysql_database = "d9p794pmkr7vi3"; // the database name of where to connect to and where the information will be help.

$connection = mysql_connect("$mysql_server","$mysql_user","$mysql_password") or die ("Unable to establish a DB connection");

$db = mysql_select_db("$mysql_database") or die ("Unable to establish a DB connection");
?>
