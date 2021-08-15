<?php
$servername = "localhost";
$username = "root";
$password = "pcshah123";
$studentname = "Priya";
$subject = "ENSE 353";
$prof_name = "Dr. Craig Gelowitz";


// Create connection
$conn = new mysqli($servername, $username, $password);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
  }

$create_query = "CREATE DATABASE demo_table";
$createtable = "CREATE TABLE Students(studentname VARCHAR(20), subject VARCHAR(20), professor VARCHAR(20))";
$insert_query = "INSERT into `Students` (studentname, subject, professor) VALUES ('$studentname',  '$subject','$prof_name')";

if(mysqli_query($conn, $create_query)){
    echo "Database created successfully\n";
} else{
    echo "ERROR: Could not able to execute $create_query. " . mysqli_error($conn);
}

mysqli_select_db($conn, 'demo_table');
if(mysqli_query($conn, $createtable)){
  echo "Table Students created successfully\n";
} else{
  echo "ERROR: Could not able to execute $createtable. " . mysqli_error($conn);
}

if(mysqli_query($conn, $insert_query)){
  echo "Row added successfully\n";
} else{
  echo "ERROR: Could not able to execute $insert_query. " . mysqli_error($conn);
}
 
// Close connection
mysqli_close($conn);
?>
