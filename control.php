<?php
include 'firebase-php/src/firebaseLib.php';
include 'config.php';

$firebase = new \Firebase\FirebaseLib(DEFAULT_URL, DEFAULT_TOKEN);
?>

<!DOCTYPE html>
<html>
<head>
</head>
<body>
<a href="control.php?LED=ON"><button>ON</button></a>
<a href="control.php?LED=OFF"><button>OFF</button></a>
<br>
<?php
if(isset($_GET['LED'])){
    $action = $_GET['LED'];
if ($action == 'ON') {
	$lightState = 'on';
	echo "LED Status: ON";
	}
else if ($action == 'OFF') {
	$lightState = 'off';
	echo "LED Status: OFF";
	}
	$firebase->set(DEFAULT_PATH, $lightState);
}

else {
$state = $firebase->get(DEFAULT_PATH);
if($state == '"on"') 	  echo "LED Status: ON";
else if($state == '"off"') echo "LED Status: OFF";
  }
?>
</body>
</html>