<?php include_once("connect.php"); ?>
<html >
<head>
<title>Test</title>
</head>

<body>


<? 
if (isset($_POST['Submit'])) {
$sql = "INSERT INTO users SET id = '', name = '".$_POST['name']."'";
$res = mysql_query($sql);

echo "".$_POST['name']." ADDED";
}


// This is the bit that is new .The line below is just selecting data from users table and adding it to result
$result = mysql_query("SELECT name,id,money FROM users ORDER BY id DESC") or die(mysql_error());


// this is assingint som html for the drop down menu along with the some php and the data from result
$member_list = "";
	while($row = mysql_fetch_array( $result )) {
		if($row['name'] == $_POST['Name_list']){
		$member_list .= "<option selected=\"selected\" value=\"".$row['name']."\">".$row['name']."</option>";
		}else{
		$member_list .= "<option value=\"".$row['name']."\">".$row['name']."</option>";		
		}
	}


// the following below happend when you hit search and what it does is select data on the name you clicked on from the menu.
if(isset($_POST['Select']) or isset($_POST['update'])){

$sql = "SELECT * FROM users WHERE name='".mysql_real_escape_string($_POST['Name_list'])."'";
$query = mysql_query($sql) or die(mysql_error());
$row = mysql_fetch_object($query);
$select_money = htmlspecialchars($row->money);
}

// Updating the database with the information entered.
if(isset($_POST['update'])){
$result = mysql_query("UPDATE users SET money='".mysql_real_escape_string($_POST['money'])."' WHERE name='" .mysql_real_escape_string($_POST['Name_list']). "'") 
or die(mysql_error());	

echo "".$_POST['Name_list']."'s money have been changed.";
}
?>
<form method="post" >
  <p>
  <center>
    <p>ENTER NAME <br />
        <input type="text" name="name" id="name" />
        <br />
        <input type="submit" name="Submit" id="Submit" value="Submit" />
    </p>
    <p><br>
      <span class="cell">
      Select a Name
      <select name="Name_list" class="textbox" id="Name_list">
        <option value="<?php echo htmlspecialchars($_GET['user']);?>">Select.</option>
        <?php echo $member_list; ?>
      </select>
      </span>
      <input type="submit" name="Select" id="Select" onfocus="if(this.blur)this.blur()" value="Select">
      <br>
Change the Money
<input type="text" name="money" id="money" value="<?php echo $select_money; ?>">
    <br>
    <input type="submit" name="update" id="update" value="Update">
    <br>
    </p>
    <p> </p>
    <table width="50%" border="2" cellspacing="1" cellpadding="0">
      <tr align="center">
        <td colspan="3">Users Information</td>
      </tr>
      <tr align="center">
        <td>ID</td>
        <td>Name</td>
        <td>Money</td>
      </tr>
      <? 
$result = mysql_query("SELECT * FROM users") or die(mysql_error());
// keeps getting the next row until there are no more to get
	while($row = mysql_fetch_array( $result )) {
// Print out the contents of each row into a table?>
      <tr>
       <td><label for="<?php echo $row['id']; ?>"><?php
	$name2=$row['id'];
	echo "$name2"; ?>
    </label></td>
        <td><? echo $row['name'] ?></td>
        <td><? echo $row['money'] ?></td>
      </tr>
        <?php }// while loop ?>
    </table>
    <p> </p>
  </center>
  </p>
</form>
</body>
</html>

