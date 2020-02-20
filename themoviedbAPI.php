<?php

$servername = "localhost";
$dbusername = "ckxgo7tfsnuf";
$password = "cindyL@N3";
$dbname = "CalendarTrac";

// Create connection
$conn = new mysqli($servername, $dbusername, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

date_default_timezone_set('America/New_York');

$curl = curl_init();
curl_setopt($curl, CURLOPT_URL, "https://api.themoviedb.org/3/movie/upcoming?api_key=cdc03805c800e08e3e1aba62c03b08a9&language=en-US&page=1"); //1 thru 3 pages
curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
$result = curl_exec($curl);
curl_close($curl);
//print $result;


$json = json_decode($result, true);
print_r($json);
echo "<br><br><br>NEW SHIT HERE: <br>";
echo $topic = $json['results'][0]['title'];
echo "<br>";
echo $json['results'][1]['title'];
echo "<br><br>";

foreach ($json['results'] as $test) {
	echo $id = $test['id'];
	echo "<br>";
	echo $title = "[Movie]{". date("m-d-Y", strtotime($test['release_date']))."} ".$test['title'];
	echo "<br>";
	echo $url = "https://www.themoviedb.org/movie/".$test['id'];
	echo "<br>";
	echo $class = "event-info";
	echo "<br>";
	echo $test['release_date'];
	echo "<br>";
	echo $start = strtotime($test['release_date'])* 1000; //makes it 12:01 14330000 is -4 hours for unix. default EST. strtotime is a string so no timezone effect;
	echo "<br>";
	echo $end = (strtotime($test['release_date'])* 1000 - 14330000) + 14400000; //14400000 = 4 hours
	echo "<br>";
	echo $comment = $test['title'];
	echo "<br>";
	echo $subclass1 = $test['title'];
	echo "<br>";
	echo $subclass2 = "Movies";
	echo "<br>";
	echo $subclass3 = "None";
	echo "<br>";
	echo $subclass4 = "None";
	echo "<br>";
	echo $subclass5 = "None";
	echo "<br>";
	echo $subclass6 = "None";
	echo "<br>";
	echo $subclass7 = "None";
	echo "<br>";
	echo $subclass8 = "None";
	echo "<br>";
	echo $subclass9 = "None";
	echo "<br>";
	echo "<br><br>";

$sql = "INSERT INTO events (id, title, url, class, start, end, comment, subclass1, subclass2, subclass3, subclass4, subclass5, subclass6, subclass7, subclass8, subclass9)
VALUES ('$id', '$title', '$url', '$class', '$start', '$end', '$comment', '$subclass1', '$subclass2', '$subclass3', '$subclass4', '$subclass5','$subclass6','$subclass7','$subclass8','$subclass1') 
ON DUPLICATE KEY UPDATE id = '$id', title = '$title', url = '$url', class ='$class', start='$start', end='$end', comment='$comment', subclass1='$subclass1', subclass2='$subclass2', subclass3='$subclass3', subclass4='$subclass4', subclass5='$subclass5', subclass6='$subclass6', subclass7='$subclass7', subclass8='$subclass8', subclass9='$subclass9' ";

if ($conn->query($sql) === TRUE) {
    echo "Record updated successfully";
} else {
    echo "Error updating record: " . $conn->error;
}
    
}

/*
$servername = "localhost";
$dbusername = "root";
$password = "";
$dbname = "firstDB";

// Create connection
$conn = new mysqli($servername, $dbusername, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "INSERT INTO events (id, title, url, class, start, end, comment, subclass1, subclass2, subclass3, subclass4, subclass5, subclass6, subclass7, subclass8, subclass9)
VALUES ('', '', '', '', '', '', '', '', '', '', '', '') ON DUPLICATE KEY UPDATE id = '' ";

if ($conn->query($sql) === TRUE) {
    echo "Record updated successfully";
} else {
    echo "Error updating record: " . $conn->error;
}

$conn->close();
*/
$conn->close();
?>

<html>
<body>


</body>
</html>