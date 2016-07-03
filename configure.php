<?php

$myremotedatabase = "";
$myremoteserver = "";
$myremotepass = "";
$myremoteuser = "";



// mysql database data
$database = ($_POST["data"]);
$nameserver = ($_POST["server");
$serverpass = ($_POST["pass"]);
$serveruser = ($_POST["user"]);
// information about company and administrator

$companyname = ($_POST["company"]);
$director = ($_POST["boss"]);
$administrator = ($_POST["admin"]);

try {
    $conn = new PDO("mysql:host=$myremoteserver;dbname=$myremotedatabase", $myremoteuser, $myremotepass);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $sql = "INSERT INTO custumers (company, director, email, admin, database, server, pass, user)
    VALUES ('John', 'Doe', 'john@example.com')";
    // use exec() because no results are returned
    $conn->exec($sql);

VALUES ('John', 'Doe', 'john@example.com')";
?>
<html>
<body>
<h1>MyRemoteWork || configure</h1>
<p>We need to collect some info about you and your company</p>
<form>
<input type="text" placeholder="Your company's director full name>
<input type="text" placeholder="Your company's name">
<input type="text" placeholder="Your full name (if you are administrator)">
       <p>Now we need your mysql database data</p>
       <input type="text" placeholder="database" name="data">
       <input type="text" placeholder="server or host" name="server">
       <input type="text" placeholder="password" name="pass">
       <input type="text" placeholder="username" name="user">
       <radiobutton name="idonthave">My company doesn't have any mysql database</radiobutton>
       <button name="done" class="button button3">Next step</button>
 </form>
