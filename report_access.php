
<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "foresthack";
$safe = array();
$danger = array();
$warning = array();
$all = array();
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
     die("Connection failed: " . $conn->connect_error);
}
//safe
$sql = "SELECT * FROM report where status = 'safe'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
     // output data of each row
		 $j=0;
     while($row = $result->fetch_assoc()) {
				 $safe[$j]=array($row["status"],$row["report_date"],$row["report_time"],$row["latitude"],$row["longitude"],$row["message"]);
				 $j++;
     }
} else {
     echo "0 results";
}


//danger

$sql = "SELECT * FROM report where status = 'warning'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
     // output data of each row
		 $i=0;
     while($row = $result->fetch_assoc()) {

			 $danger[$i]=array($row["status"],$row["report_date"],$row["report_time"],$row["latitude"],$row["longitude"],$row["message"]);
			 $i++;
     }
}

// Warning
$sql = "SELECT * FROM report where status = 'danger'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
     // output data of each row
		 $i=0;
     while($row = $result->fetch_assoc()) {

			 $warning[$i]=array($row["status"],$row["report_date"],$row["report_time"],$row["latitude"],$row["longitude"],$row["message"]);
			 $i++;
     }
}
//all
//safe
$sql = "SELECT * FROM report";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
     // output data of each row
		 $j=0;
     while($row = $result->fetch_assoc()) {
				 $all[$j]=array($row["status"],$row["report_date"],$row["report_time"],$row["latitude"],$row["longitude"],$row["message"]);
				 $j++;
     }
}

$conn->close();
?>
