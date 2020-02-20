<?php
	
	$username = $_SESSION["username"]; // you should really do some more logic to see if it's set first
	
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

$sql = "SELECT id, username, email, topic1, topic2, topic3, topic4, topic5, topic6, topic7,topic8, topic9 FROM users WHERE username = '$username'";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {
    	echo "<br><br>";
echo $topic1 = $row["topic1"];
echo "|";
echo $topic2 = $row["topic2"];
echo "|";
echo $topic3 = $row["topic3"];
echo "|";
echo $topic4 = $row["topic4"];
echo "|";
echo $topic5 = $row["topic5"];
echo "|";
echo $topic6 = $row["topic6"];
echo "|";
echo $topic7 = $row["topic7"];
echo "|";
echo $topic8 = $row["topic8"];
echo "|";
echo $topic9 = $row["topic9"];
echo "|";
        echo "<br>id: " . $row["id"]. " - Username: " . $row["username"]. " " . $row["email"]. "<br>";
    }
} else {
    echo "0 results";
}

mysqli_close($conn);

//these are the server details
//the username is root by default in case of xampp
//password is nothing by default
//and lastly we have the database named android. if your database name is different you have to change it 
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
 
//if everything is fine
 
//creating an array for storing the data 
$heroes = array(); 
 
//this is our sql query 
$sql = "SELECT id, title, url, class, start, end FROM events where subclass1 IN ('$topic1','$topic2','$topic3','$topic4','$topic5','$topic6','$topic7','$topic8','$topic9') OR 
subclass2 IN ('$topic1','$topic2','$topic3','$topic4','$topic5','$topic6','$topic7','$topic8','$topic9') OR
subclass3 IN ('$topic1','$topic2','$topic3','$topic4','$topic5','$topic6','$topic7','$topic8','$topic9') OR
subclass4 IN ('$topic1','$topic2','$topic3','$topic4','$topic5','$topic6','$topic7','$topic8','$topic9') OR
subclass5 IN ('$topic1','$topic2','$topic3','$topic4','$topic5','$topic6','$topic7','$topic8','$topic9') OR
subclass6 IN ('$topic1','$topic2','$topic3','$topic4','$topic5','$topic6','$topic7','$topic8','$topic9') OR
subclass7 IN ('$topic1','$topic2','$topic3','$topic4','$topic5','$topic6','$topic7','$topic8','$topic9') OR
subclass8 IN ('$topic1','$topic2','$topic3','$topic4','$topic5','$topic6','$topic7','$topic8','$topic9') OR
subclass9 IN ('$topic1','$topic2','$topic3','$topic4','$topic5','$topic6','$topic7','$topic8','$topic9')"  ;
 
//creating an statment with the query
$stmt = $conn->prepare($sql);
 
//executing that statment
$stmt->execute();
 
//binding results for that statment 
$stmt->bind_result($id, $title, $url, $class, $start, $end);
 
//looping through all the records
while($stmt->fetch()){
 
 //pushing fetched data in an array 
 $temp = [
 'id'=>$id,
 'title'=>$title,
 'url'=>$url,
 'class'=>$class,
 'start'=>$start,
 'end'=>$end
 ];
 
 //pushing the array inside the hero array 
 array_push($heroes, $temp);
}

 $str = '{
	"success": 1,
	"result": ';
 $str;

//displaying the data in json format 
json_encode($heroes);


 $str2 = "

}";
 $str2;


//format the data
$formattedData = $str. json_encode($heroes) . $str2;

//set the filename
$filename = $username .'.json.php';
//open or create the file
$handle = fopen($filename,'w+');

//write the data into the file
fwrite($handle,$formattedData);

//close the file
fclose($handle);

// echo $start = date('Y-m-d h:i:s', (1363155300000 / 1000));
//echo '<p><a href="calendar.php">Calendar</a></p>';
//echo '<p><a href="getdata3.php">getdata3</a></p>';
echo "calendar & databased is connected";
?>