    <?php
	session_start();
	
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "books";

    // Create a connection
    $conn = mysqli_connect($servername, $username, $password, $dbname);

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // echo "Connected successfully";

    // Close the connection
    // $conn->close();
    ?>

