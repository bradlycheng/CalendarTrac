<?php
/* 
function multiRequest($data, $options = array()) {
 
  // array of curl handles
  $curly = array();
  // data to be returned
  $result = array();
 
  // multi handle
  $mh = curl_multi_init();
 
  // loop through $data and create curl handles
  // then add them to the multi-handle
  foreach ($data as $id => $d) {
 
    $curly[$id] = curl_init();
 
    $url = (is_array($d) && !empty($d['url'])) ? $d['url'] : $d;
    curl_setopt($curly[$id], CURLOPT_URL,            $url);
    curl_setopt($curly[$id], CURLOPT_HEADER,         0);
    curl_setopt($curly[$id], CURLOPT_RETURNTRANSFER, 1);
 
    // post?
    if (is_array($d)) {
      if (!empty($d['post'])) {
        curl_setopt($curly[$id], CURLOPT_POST,       1);
        curl_setopt($curly[$id], CURLOPT_POSTFIELDS, $d['post']);
      }
    }
 
    // extra options?
    if (!empty($options)) {
      curl_setopt_array($curly[$id], $options);
    }
 
    curl_multi_add_handle($mh, $curly[$id]);
  }
 
  // execute the handles
  $running = null;
  do {
    curl_multi_exec($mh, $running);
  } while($running > 0);
 
 
  // get content and remove handles
  foreach($curly as $id => $c) {
    $result[$id] = curl_multi_getcontent($c);
    curl_multi_remove_handle($mh, $c);
  }
 
  // all done
  curl_multi_close($mh);
 
  return $result;
}
 

 
$data = array(
  'https://feeds.nfl.com/feeds-rs/scores/byTeam/PHI/2018.json',
  'https://feeds.nfl.com/feeds-rs/scores/byTeam/NYJ/2018.json',
  'https://feeds.nfl.com/feeds-rs/scores/byTeam/NYG/2018.json'
);
$r = multiRequest($data);
 
echo $r2=serialize($r);
//print_r($json);
$json = json_decode($r2, true);
//print_r($json);
echo "<br>NEW SHIT: <br>";
echo $json[0];
echo $json[0]["season"];
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
// build the individual requests, but do not execute them
$ch_1 = curl_init('https://feeds.nfl.com/feeds-rs/scores/byTeam/ARI/2018.json');
$ch_2 = curl_init('https://feeds.nfl.com/feeds-rs/scores/byTeam/ATL/2018.json');
$ch_3 = curl_init('https://feeds.nfl.com/feeds-rs/scores/byTeam/BAL/2018.json');
$ch_4 = curl_init('https://feeds.nfl.com/feeds-rs/scores/byTeam/BUF/2018.json');
$ch_5 = curl_init('https://feeds.nfl.com/feeds-rs/scores/byTeam/CAR/2018.json');
$ch_6 = curl_init('https://feeds.nfl.com/feeds-rs/scores/byTeam/CHI/2018.json');
$ch_7 = curl_init('https://feeds.nfl.com/feeds-rs/scores/byTeam/CIN/2018.json');
$ch_8 = curl_init('https://feeds.nfl.com/feeds-rs/scores/byTeam/CLE/2018.json');
$ch_9 = curl_init('https://feeds.nfl.com/feeds-rs/scores/byTeam/DAL/2018.json');
$ch_10 = curl_init('https://feeds.nfl.com/feeds-rs/scores/byTeam/DEN/2018.json');
$ch_11 = curl_init('https://feeds.nfl.com/feeds-rs/scores/byTeam/DET/2018.json');
$ch_12 = curl_init('https://feeds.nfl.com/feeds-rs/scores/byTeam/GB/2018.json');
$ch_13 = curl_init('https://feeds.nfl.com/feeds-rs/scores/byTeam/HOU/2018.json');
$ch_14 = curl_init('https://feeds.nfl.com/feeds-rs/scores/byTeam/IND/2018.json');
$ch_15 = curl_init('https://feeds.nfl.com/feeds-rs/scores/byTeam/JAX/2018.json');
$ch_16 = curl_init('https://feeds.nfl.com/feeds-rs/scores/byTeam/KC/2018.json');
$ch_17 = curl_init('https://feeds.nfl.com/feeds-rs/scores/byTeam/LAC/2018.json');
$ch_18 = curl_init('https://feeds.nfl.com/feeds-rs/scores/byTeam/LAR/2018.json');
$ch_19 = curl_init('https://feeds.nfl.com/feeds-rs/scores/byTeam/MIA/2018.json');
$ch_20 = curl_init('https://feeds.nfl.com/feeds-rs/scores/byTeam/MIN/2018.json');
$ch_21 = curl_init('https://feeds.nfl.com/feeds-rs/scores/byTeam/NE/2018.json');
$ch_22 = curl_init('https://feeds.nfl.com/feeds-rs/scores/byTeam/NO/2018.json');
$ch_23 = curl_init('https://feeds.nfl.com/feeds-rs/scores/byTeam/NYG/2018.json');
$ch_24 = curl_init('https://feeds.nfl.com/feeds-rs/scores/byTeam/NYJ/2018.json');
$ch_25 = curl_init('https://feeds.nfl.com/feeds-rs/scores/byTeam/OAK/2018.json');
$ch_26 = curl_init('https://feeds.nfl.com/feeds-rs/scores/byTeam/PHI/2018.json');
$ch_27 = curl_init('https://feeds.nfl.com/feeds-rs/scores/byTeam/PIT/2018.json');
$ch_28 = curl_init('https://feeds.nfl.com/feeds-rs/scores/byTeam/SEA/2018.json');
$ch_29 = curl_init('https://feeds.nfl.com/feeds-rs/scores/byTeam/SF/2018.json');
$ch_30 = curl_init('https://feeds.nfl.com/feeds-rs/scores/byTeam/TB/2018.json');
$ch_31 = curl_init('https://feeds.nfl.com/feeds-rs/scores/byTeam/TEN/2018.json');
$ch_32 = curl_init('https://feeds.nfl.com/feeds-rs/scores/byTeam/WAS/2018.json');

curl_setopt($ch_1, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch_2, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch_3, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch_4, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch_5, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch_6, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch_7, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch_8, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch_9, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch_10, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch_11, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch_12, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch_13, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch_14, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch_15, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch_16, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch_17, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch_18, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch_19, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch_20, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch_21, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch_22, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch_23, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch_24, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch_25, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch_26, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch_27, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch_28, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch_29, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch_30, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch_31, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch_32, CURLOPT_RETURNTRANSFER, true);

  
// build the multi-curl handle, adding both $ch
$mh = curl_multi_init();
curl_multi_add_handle($mh, $ch_1);
curl_multi_add_handle($mh, $ch_2);
curl_multi_add_handle($mh, $ch_3);
curl_multi_add_handle($mh, $ch_4);
curl_multi_add_handle($mh, $ch_5);
curl_multi_add_handle($mh, $ch_6);
curl_multi_add_handle($mh, $ch_7);
curl_multi_add_handle($mh, $ch_8);
curl_multi_add_handle($mh, $ch_9);
curl_multi_add_handle($mh, $ch_10);
curl_multi_add_handle($mh, $ch_11);
curl_multi_add_handle($mh, $ch_12);
curl_multi_add_handle($mh, $ch_13);
curl_multi_add_handle($mh, $ch_14);
curl_multi_add_handle($mh, $ch_15);
curl_multi_add_handle($mh, $ch_16);
curl_multi_add_handle($mh, $ch_17);
curl_multi_add_handle($mh, $ch_18);
curl_multi_add_handle($mh, $ch_19);
curl_multi_add_handle($mh, $ch_20);
curl_multi_add_handle($mh, $ch_21);
curl_multi_add_handle($mh, $ch_22);
curl_multi_add_handle($mh, $ch_23);
curl_multi_add_handle($mh, $ch_24);
curl_multi_add_handle($mh, $ch_25);
curl_multi_add_handle($mh, $ch_26);
curl_multi_add_handle($mh, $ch_27);
curl_multi_add_handle($mh, $ch_28);
curl_multi_add_handle($mh, $ch_29);
curl_multi_add_handle($mh, $ch_30);
curl_multi_add_handle($mh, $ch_31);
curl_multi_add_handle($mh, $ch_32);

  
// execute all queries simultaneously, and continue when all are complete
  $running = null;
  do {
    curl_multi_exec($mh, $running);
  } while ($running);

//close the handles
curl_multi_close($mh);
  
// all of our requests are done, we can now access the results
$response_1 = curl_multi_getcontent($ch_1);
$response_2 = curl_multi_getcontent($ch_2);
$response_3 = curl_multi_getcontent($ch_3);
$response_4 = curl_multi_getcontent($ch_4);
$response_5 = curl_multi_getcontent($ch_5);
$response_6 = curl_multi_getcontent($ch_6);
$response_7 = curl_multi_getcontent($ch_7);
$response_8 = curl_multi_getcontent($ch_8);
$response_9 = curl_multi_getcontent($ch_9);
$response_10 = curl_multi_getcontent($ch_10);
$response_11 = curl_multi_getcontent($ch_11);
$response_12 = curl_multi_getcontent($ch_12);
$response_13 = curl_multi_getcontent($ch_13);
$response_14 = curl_multi_getcontent($ch_14);
$response_15 = curl_multi_getcontent($ch_15);
$response_16 = curl_multi_getcontent($ch_16);
$response_17 = curl_multi_getcontent($ch_17);
$response_18 = curl_multi_getcontent($ch_18);
$response_19 = curl_multi_getcontent($ch_19);
$response_20 = curl_multi_getcontent($ch_20);
$response_21 = curl_multi_getcontent($ch_21);
$response_22 = curl_multi_getcontent($ch_22);
$response_23 = curl_multi_getcontent($ch_23);
$response_24 = curl_multi_getcontent($ch_24);
$response_25 = curl_multi_getcontent($ch_25);
$response_26 = curl_multi_getcontent($ch_26);
$response_27 = curl_multi_getcontent($ch_27);
$response_28 = curl_multi_getcontent($ch_28);
$response_29 = curl_multi_getcontent($ch_29);
$response_30 = curl_multi_getcontent($ch_30);
$response_31 = curl_multi_getcontent($ch_31);
$response_32 = curl_multi_getcontent($ch_32);
$array1 = json_encode(array(curl_multi_getcontent($ch_1),curl_multi_getcontent($ch_2),curl_multi_getcontent($ch_3),curl_multi_getcontent($ch_4),
	curl_multi_getcontent($ch_5),curl_multi_getcontent($ch_6),curl_multi_getcontent($ch_7),curl_multi_getcontent($ch_8),curl_multi_getcontent($ch_9),
	curl_multi_getcontent($ch_10),curl_multi_getcontent($ch_11),curl_multi_getcontent($ch_12),curl_multi_getcontent($ch_13),curl_multi_getcontent($ch_14),
	curl_multi_getcontent($ch_15),curl_multi_getcontent($ch_16),curl_multi_getcontent($ch_17),curl_multi_getcontent($ch_18),curl_multi_getcontent($ch_19),
	curl_multi_getcontent($ch_20),curl_multi_getcontent($ch_21),curl_multi_getcontent($ch_22),curl_multi_getcontent($ch_23),curl_multi_getcontent($ch_24),
	curl_multi_getcontent($ch_25),curl_multi_getcontent($ch_26),curl_multi_getcontent($ch_27),curl_multi_getcontent($ch_28),curl_multi_getcontent($ch_29),
	curl_multi_getcontent($ch_30),curl_multi_getcontent($ch_31),curl_multi_getcontent($ch_32)));
//echo "$response_1 $response_2"; // output results
$json = json_decode($array1, true);
//print_r($json);
echo "<br><br><br>NEW SHIT HERE: <br>";

//$testing1 = json_decode($json[0], true);
foreach ($json as $trail){ $json2 = json_decode($trail,true);
foreach ($json2['gameScores'] as $test) {
echo $id = $test['gameSchedule']['gameId'] ;
echo "<br>";
echo $title = "[NFL]{". $test['gameSchedule']['seasonType']. "}week". $test['gameSchedule']['week'] . ": " . $test['gameSchedule']['gameTimeEastern'] . " " .
$test['gameSchedule']['visitorDisplayName'] . " " . $test['score']['visitorTeamScore']['pointTotal']. " @ ".
$test['gameSchedule']['homeDisplayName'] . " " . $test['score']['homeTeamScore']['pointTotal'] . " " .$test['gameSchedule']['site']['siteFullname']. " ".
$test['gameSchedule']['site']['siteState'] . " ". $test['gameSchedule']['site']['roofType'];
echo "<br>";
echo $url = "http://www.nfl.com/schedules/2018";
echo "<br>";
echo $class = "event-warning";
echo "<br>";
echo $start = $test['gameSchedule']['isoTime']-14400000;
echo "<br>";
echo $end = $test['gameSchedule']['isoTime']+14400000-14400000;//14400000 = 4 hours
echo "<br>";
echo $comment = "NFL";
echo "<br>";
echo $subclass1 = "NFL";
echo "<br>";
echo $subclass2 = $test['gameSchedule']['visitorDisplayName'];
echo "<br>";
echo $subclass3 = $test['gameSchedule']['homeDisplayName'];
echo "<br>";
$dayOfWeek = date("l", strtotime($test['gameSchedule']['gameDate']));
if($dayOfWeek == "Sunday")
{
	echo $subclass4 = "Sunday NFL";

}else{echo $subclass4 = "Thurs/Sat/Mon NFL";}; 
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
?>
