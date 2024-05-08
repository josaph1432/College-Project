<?php
$servername = "localhost";
$username = "root";
$password = ""; // Your database password
$dbname = "college results"; // Replace with your actual database name

$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
<?php
$username = $_POST['username']; // Assuming you're using a form to submit the username and password
$password = $_POST['pwd'];

$sql = "SELECT * FROM DATA WHERE username = '$username' AND pwd = '$password'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // User found, fetch the data
    $row = $result->fetch_assoc();
    $password = $row['pwd'];
    $username = $row['username'];
    $dbms = $row['dbms'];
    $sedp = $row['sedp'];
    $cn = $row['cn'];
    $dwdm = $row['dwdm'];
    $mad = $row['mad'];
  
    // ... other columns you want to retrieve

    // Display user information or redirect to a welcome page
   
    echo "Welcome: $username <br>";
    echo "your password: $password <br>
    <br> ";
    echo "YOUR MARKS IS BELLOW:--- <br><br>";
    echo "DBMS:  $dbms <br>";
    echo "SEDP:  $sedp <br>";
    echo "CN:  $cn <br>";
    echo "DWDM:  $dwdm <br>";
    echo "MAD:  $mad ";
} else {
    // User not found or invalid credentials
    echo "Invalid username or password.";
}

$conn->close();
?>
