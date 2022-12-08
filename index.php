<?php


//pass the  variabel value 
if (isset($_POST["btn"])) {
    //echo "Yes, mail is set";  
    
    $name = $_POST["name"];
    $email = $_POST["email"];
    $pass = $_POST["pass"];
    $btn = $_POST["btn"];
    
  
}
else {
    echo "N0, mail is not set";
  }  

$servername = "localhost";
$username = "root";
$password = "";
$database = "login";






// Create connection
$conn = mysqli_connect($servername, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
//echo "Connected successfully";


//incert query 
 $sql = "INSERT INTO `login`.`login` ( `name`, `email`, `password`) VALUES ( '$name', '$email', '$pass')";
 $result = mysqli_query($conn, $sql);

// Add a new data in data baset table 
if($result){
    echo "The record has been inserted successfully successfully!<br>";
}
else{
    //echo "The record was not inserted successfully because of this error ---> ". mysqli_error($conn);
}
// check querry connection
 if (mysqli_query($conn, $sql)) {
    echo "New record created successfully" ;
 }else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
      echo "New record created Unsuccessfully" ;

  }
  
//connection close
  mysqli_close($conn);;

?>



