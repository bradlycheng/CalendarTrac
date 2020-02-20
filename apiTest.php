
<?php

//if(!session_is_registered(myusername)){
//header("location:main_login.php");
//	echo "session is registered";
//}
/*
$Url = 'http://api.tvmaze.com/singlesearch/shows?q=south%park&embed=episodes';

function curl_download($Url){

 if (!function_exists('curl_init')){

 die('cURL is not installed. Install and try again.');

 }

 $ch = curl_init();

 curl_setopt($ch, CURLOPT_URL, $Url);

 curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

 $output = curl_exec($ch);

 curl_close($ch);

 return $output;

}

//print curl_download('http://api.tvmaze.com/singlesearch/shows?q=south%20park&embed=episodes');
*/
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
curl_setopt($curl, CURLOPT_URL, "http://api.tvmaze.com/singlesearch/shows?q=south%20park&embed=episodes");
curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
$result = curl_exec($curl);
curl_close($curl);
//print $result;


$json = json_decode($result, true);
print_r($json);
echo "<br><br><br>NEW SHIT HERE: <br>";
echo $topic = $json['name'];
echo "<br><br>";
//echo $json['_embedded']['episodes'][0]['name'];
foreach ($json['_embedded']['episodes'] as $test) {
	echo $id = $test['id'];
	echo "<br>";
    echo $title = "[TV]{".$topic . "} ". $test['airstamp'] . " " . $test['name'] . " [Season:" . $test['season'] . " Episode:" . $test['number'] . "]";
    echo "<br>";
    echo $url = $test['url'];
	echo "<br>";
	echo $class = "event-important";
	echo "<br>";
    echo $start = strtotime($test['airstamp']) * 1000; // miliseconds
    echo "<br>";
    echo date("Y-m-d H:i:s", intval(strtotime($test['airstamp']))); //actual date
    echo "<br>";
	//echo strtotime($test['airtime'])* 1000;
	$parsed = date_parse("00:".$test['airtime']);
	echo $airtime = ($parsed['hour'] * 3600 + $parsed['minute'] * 60 + $parsed['second'])*1000;
	echo "<br>";
	echo $end = $airtime + $start;
	echo "<br>";
	echo $comment = $topic;
	echo "<br>";
	echo $subclass1 = $topic;
	echo "<br>";
	echo $subclass2 = "TV Shows";
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