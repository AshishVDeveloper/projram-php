
<?php
session_start();
include "auth.php";

	if ($_SERVER["REQUEST_METHOD"] == "POST") {
  // collect value of input field
  
    $name = $_POST['name']; 
    $gender = $_POST['gender']; 
    $email_id = $_POST['email']; 
	$mobile_no = $_POST['mobile']; 
	$address = $_POST['address'];
if(empty($name)&&empty($email_id)&&empty($mobile_no)){
echo "All Entry is Empty</br>";	
header("Location:update.html");
exit;
	}
  if(empty($mobile_no)){

include "mb_required.php";
exit;
  }
elseif(empty($email_id) && empty($address)&& empty($gender)){
  $sql = "UPDATE tbl_employee SET name='$name' WHERE mobile_no='$mobile_no'";
if ($conn->query($sql) === TRUE) {
  echo "<center><b> The Name [ ".$name ." ] is Updated successfully</center></b></br>";
  include "updated_data.php";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
	}}
elseif(empty($name)&&empty($address)&& empty($gender)){
  $sql = "UPDATE tbl_employee SET email_id='$email_id' WHERE mobile_no='$mobile_no'";
if ($conn->query($sql) === TRUE) {
  echo "<center><b> The Email [ ".$email_id ." ] is Updated successfully</center></b></br>";
  include "updated_data.php";
  
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
	}}
elseif(empty($email_id)&&empty($name)&& empty($gender)){
  $sql = "UPDATE tbl_employee SET address='$address' WHERE mobile_no='$mobile_no'";
if ($conn->query($sql) === TRUE) {
  echo "<center><b> The Address [ ".$address ." ] is Updated successfully</center></b></br>";
  include "updated_data.php";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
	}}
elseif(empty($email_id)&&empty($name)&& empty($address)){
  $sql = "UPDATE tbl_employee SET gender='$gender' WHERE mobile_no='$mobile_no'";
if ($conn->query($sql) === TRUE) {
  echo "<center><b> The Address [ ".$gender ." ] is Updated successfully</center></b></br>";
  include "updated_data.php";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
  }}

  elseif(empty($email_id)&&empty($name)){
  $sql = "UPDATE tbl_employee SET address='$address', gender='$gender' WHERE mobile_no='$mobile_no'";
if ($conn->query($sql) === TRUE) {
  echo "<center><b> The Address [ ".$address ." ] is Updated successfully</center></b></br>";
  include "updated_data.php";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
  }}

elseif(empty($email_id)&&empty($name)&&empty($gender)){
  $sql = "UPDATE tbl_employee SET address='$address' WHERE mobile_no='$mobile_no'";
if ($conn->query($sql) === TRUE) {
  echo "<center><b> The Address [ ".$address ." ] is Updated successfully</center></b></br>";
  include "updated_data.php";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
  }}

  elseif(empty($gender)&&empty($name)){
  $sql = "UPDATE tbl_employee SET email_id='$email_id',address='$address' WHERE mobile_no='$mobile_no'";
if ($conn->query($sql) === TRUE) {
  echo "<center><b> The Address [ ".$address ." ] is Updated successfully</center></b></br>";
  include "updated_data.php";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
  }}

elseif(empty($address)&&empty($name)){
  $sql = "UPDATE tbl_employee SET email_id='$email_id',gender='$gender' WHERE mobile_no='$mobile_no'";
if ($conn->query($sql) === TRUE) {
  echo "<center><b> The Address [ ".$address ." ] is Updated successfully</center></b></br>";
  include "updated_data.php";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
  }}

  elseif(empty($address)&& empty($gender)){
  $sql = "UPDATE tbl_employee SET name='$name', email_id='$email_id' WHERE mobile_no='$mobile_no'";
if ($conn->query($sql) === TRUE) {
  echo "<center><b> The Name [ ".$name ." ] is Updated successfully</center></b></br>";
  include "updated_data.php";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
  }}

 elseif(empty($email_id)&& empty($address)){
  $sql = "UPDATE tbl_employee SET name='$name', gender='$gender' WHERE mobile_no='$mobile_no'";
if ($conn->query($sql) === TRUE) {
  echo "<center><b> The Name [ ".$name ." ] is Updated successfully</center></b></br>";
  include "updated_data.php";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
  }}

  elseif(empty($email_id)&& empty($gender)){
  $sql = "UPDATE tbl_employee SET name='$name', address='$address' WHERE mobile_no='$mobile_no'";
if ($conn->query($sql) === TRUE) {
  echo "<center><b> The Name [ ".$name ." ] is Updated successfully</center></b></br>";
  include "updated_data.php";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
  }}


else{
	$sql = "UPDATE tbl_employee SET name='$name',email_id='$email_id',address='$address' WHERE mobile_no='$mobile_no'";
if ($conn->query($sql) === TRUE) {
  echo "<center><b> The Name is [ ".$name ." ] and The Email is [ ".$email_id ." ] and Address is [ ".$address ." ] is Updated successfully</center></b></br>";
  include "updated_data.php";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
	}
	
}
	
}
	
?>