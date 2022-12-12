<?php
session_start();
if(isset($_POST['submit_form']))
{
 $servername = "localhost";
 $username = "root";
 $password = "";
 $dbname = "mahaan";
 

$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error){
    die("Connection failed: " . $conn->connect_error);
}	 
 
$fname=mysqli_real_escape_string($conn, $_POST['fname']);
$lname=mysqli_real_escape_string($conn, $_POST['lname']);
$age=mysqli_real_escape_string($conn, $_POST['age']);
$address=mysqli_real_escape_string($conn, $_POST['address']);
$supervisor=mysqli_real_escape_string($conn, $_POST['supervisor']);
$date=mysqli_real_escape_string($conn, $_POST['date']);
$q1=mysqli_real_escape_string($conn, $_POST['q1']);
$q2=mysqli_real_escape_string($conn, $_POST['q2']);
$q3=mysqli_real_escape_string($conn, $_POST['q3']);
$q4=mysqli_real_escape_string($conn, $_POST['q4']);
$q5=mysqli_real_escape_string($conn, $_POST['q5']);
$q6=mysqli_real_escape_string($conn, $_POST['q6']);
$q7=mysqli_real_escape_string($conn, $_POST['q7']);
$q8=mysqli_real_escape_string($conn, $_POST['q8']);
$q9=mysqli_real_escape_string($conn, $_POST['q9']);
$q10=mysqli_real_escape_string($conn, $_POST['q10']);
$q11=mysqli_real_escape_string($conn, $_POST['q11']);
$_SESSION['fname'] = $fname;
  $sql = "INSERT INTO tb (fname,lname,age,address,supervisor,date,q1,q2,q3,q4,q5,q6,q7,q8,q9,q10,q11) VALUES ('$fname','$lname','$age','$address','$supervisor','$date','$q1','$q2','$q3','$q4','$q5','$q6','$q7','$q8','$q9','$q10','$q11')";
   if ($conn->query($sql) === TRUE) {
    header('LOCATION:thanks.php');
  } else {
    echo "Error: " . $sql . "<br>" . $conn->error;
  } 
}
?>