<?php
echo $username = $_POST["username"];
echo "<br><br>";
echo $password = $_POST["password"];
echo "<br><br>";
echo $email = $_POST["email"];
echo "<br><br>";
echo $topic1 = $_POST["topic1"];
echo "<br><br>";
echo $topic2 = $_POST["topic2"];
echo "<br><br>";
echo $topic3 = $_POST["topic3"];
echo "<br><br>";
echo $topic4 = $_POST["topic4"];
echo "<br><br>";
echo $topic5 = $_POST["topic5"];
echo "<br><br>";
echo $topic6 = $_POST["topic6"];
echo "<br><br>";
echo $topic7 = $_POST["topic7"];
echo "<br><br>";
echo $topic8 = $_POST["topic8"];
echo "<br><br>";
echo $topic9 = $_POST["topic9"];
echo "<br><br>";


$servername = "localhost";
$dbusername = "ckxgo7tfsnuf";
$dbpassword = "cindyL@N3";
$dbname = "CalendarTrac";

// Create connection
$conn = new mysqli($servername, $dbusername, $dbpassword, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "INSERT INTO users (username, password, email, topic1, topic2, topic3, topic4, topic5, topic6, topic7, topic8, topic9)
VALUES ('$username', '$password', '$email', '$topic1', '$topic2', '$topic3', '$topic4', '$topic5', '$topic6', '$topic7', '$topic8', '$topic9')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
echo '<p><a href="index.html">Login</a></p>';
?>
