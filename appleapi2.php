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
curl_setopt($curl, CURLOPT_URL, "https://rss.itunes.apple.com/api/v1/us/apple-music/new-releases/all/100/explicit.json"); //https://rss.itunes.apple.com/api/v1/us/apple-music/new-releases/all/100/explicit.json
curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
$result = curl_exec($curl);
curl_close($curl);
//print $result;


$json = json_decode($result, true);
print_r($json);
echo "<br><br><br>NEW SHIT HERE: <br>";
echo "NEW RELEASES ON APPLE MUSIC";
//echo $topic = $json['gameScores'][0] ['gameSchedule']['gameDate'] ;
foreach ($json['feed']['results'] as $test) {  
echo "<br>";
echo $id =$test['id'];
echo "<br>";
echo $title ="[".ucfirst($test['kind'])."]" ."{".$test['releaseDate']."}". $test['name']. " by: " .$test['artistName'];
echo "<br>";
echo $url =$test['url'];
echo "<br>";
echo $class = "event-success";
echo "<br>";
echo $start =strtotime($test['releaseDate'])*1000+(1 * 60 * 1000);
echo "<br>";
echo $end =strtotime($test['releaseDate'])*1000 + (14400000/4); //1 hr
echo "<br>";
echo $comment ="Album Releases";
echo "<br>";
echo $subclass1 ="Album Releases";
echo "<br>";
echo $subclass2 =$test['name'];
echo "<br>";
echo $subclass3 =$test['artistName'];
echo "<br>";
echo $subclass4 =$test['genres'][0]['name'];
echo "<br>";
echo $subclass5 ="Apple Music";
echo "<br>";
echo $subclass6 ="None";
echo "<br>";
echo $subclass7 ="None";
echo "<br>";
echo $subclass8 ="None";
echo "<br>";
echo $subclass9 ="None";
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