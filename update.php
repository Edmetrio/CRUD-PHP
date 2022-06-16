<?php 
include  'dbconnection.php';
$succMsg= NULL;
if(isset($_POST['submit'])){
$name = $_POST['name'];
$email = $_POST['email'];
$contactno = $_POST['contactno'];
$gender = $_POST['gender'];
$qualification = $_POST['qualification'];
$address = $_POST['address'];

$sql="INSERT INTO student_details (name,email,contact_no,gender,qualification, address) Values(:names,:emailid,:mobileno,:gendr,:qualifications,:addresss)";
$query = $dbconnection -> prepare($sql);
$query->bindParam(':names',$name,PDO::PARAM_STR);
$query->bindParam(':emailid',$email,PDO::PARAM_STR);
$query->bindParam(':mobileno',$contactno,PDO::PARAM_STR);
$query->bindParam(':gendr',$gender,PDO::PARAM_STR);
$query->bindParam(':qualifications',$qualification,PDO::PARAM_STR);
$query->bindParam(':addresss',$address,PDO::PARAM_STR);
$query -> execute();
$lastInsertId = $dbconnection->lastInsertId();
if($lastInsertId>0)
{
echo "Data insert Successfully";
 }
else {

echo "Data not insert successfully";
 }
}
?>