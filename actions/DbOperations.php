<!-- ?php
$host = 'localhost';
$user = 'root';
$password = '';
$db  = "classical";

$con = mysqli_connect($host, $user, $password, $db);
//check connection
if($con)

echo "connected successfully to classical database";

$sql = "INSERT INTO `users`( `username`, `password`, `email`) VALUES ('hellen','deborah','alayohellen@gmail.com')";
//execute the upper line
$query = mysqli_query($con, $sql);

if($query)
	echo "data inserted successfully";
?> -->

<?php
$hostname = 'localhost';
$username = 'root';
$password = '';
$dbname = 'socialApp';

$con = mysqli_connect($hostname, $username, $password, $dbname);

if ($con) {
    echo 'database connected successfully <br>';
}

$sql =
    "INSERT INTO login (Username, password, email) VALUES ('johnson', '123', 'johnsonemolu@gmail.com')";

$query = mysqli_query($con, $sql);

if ($query) {
    # code...
    echo 'data inserted successfully';
}


?>
