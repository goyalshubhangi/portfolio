<?PHP
/*
CREATE TABLE messages (
	id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
	name VARCHAR(30) NOT NULL,
	email VARCHAR(50),
	message VARCHAR(500)
)
*/
	$name = $_POST['firstname'];
	$mail = $_POST['Email'];
	$message = $_POST['message'];

	$servername = "sql303.epizy.com";
	$username = "";
	$password = "";
	$dbname = "";

	$conn = new mysqli($servername, $username, $password, $dbname);
	if (!$conn) {
		die("Connection failed: " . $conn->connect_error);
	} 

	$sql = "INSERT INTO messages (name, email, message)
	VALUES ('$name', '$mail', '$message')";

	if ($conn->query($sql) === TRUE) {
		echo "<p>Your message was sent successfully, $name<br>Good day</p><br><p>$name</p><p>$mail</p><p>$message</p>";
	} else {
		echo "Error: " . $sql . "<br>" . $conn->error;
	}

	$conn->close();
?>