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
curl_setopt($curl, CURLOPT_URL, "http://data.nba.com/data/10s/v2015/json/mobile_teams/nba/2018/league/00_full_schedule.json"); //1 thru 3 pages
curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
$result = curl_exec($curl);
curl_close($curl);
//print $result;


$json = json_decode($result, true);
print_r($json);
echo "<br><br><br>NEW SHIT HERE: <br>";

foreach ($json['lscd'] as $test) {
	foreach ($test['mscd']['g'] as $test2) {
echo $id =$test2["gid"];
echo "<br>";
echo $title = "[NBA]".$test2["etm"]."(". $test2["v"]["re"] .")". $test2["v"]["tc"] ." ". $test2["v"]["tn"] ." ". $test2["v"]["s"]. " @ ". 
"(". $test2["h"]["re"] .")".$test2["h"]["tc"] ." ". $test2["h"]["tn"] ." ". $test2["h"]["s"];
echo "<br>";
echo $url ="http://www.nba.com/scores#/";
echo "<br>";
echo $class ="event-inverse";
echo "<br>";
echo $start =date("U",strtotime($test2["etm"]))* 1000;
echo "<br>";
echo $end =date("U",strtotime($test2["etm"]))* 1000 + 14400000;
echo "<br>";
echo $comment ="NBA";
echo "<br>";
echo $subclass1 ="NBA";
echo "<br>";
echo $subclass2 =$test2["v"]["tc"] . " " .$test2["v"]["tn"];
echo "<br>";
echo $subclass3 =$test2["h"]["tc"] . " " .$test2["h"]["tn"];
echo "<br>";
echo $subclass4 ="Basketball";
echo "<br>";
echo $subclass5 ="None";
echo "<br>";
echo $subclass6 ="None";
echo "<br>";
echo $subclass7 ="None";
echo "<br>";
echo $subclass8 ="None";
echo "<br>";
echo $subclass9 ="None";
echo "<br>";
//echo $json['results'][1]['title'];
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
}
//foreach ($json['season'] as $test) {
	
    
//}

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