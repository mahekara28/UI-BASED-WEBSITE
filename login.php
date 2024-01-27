<?php
$conn=mysqli_connect("localhost","root","","login")
or die(mysqli_error($conn));
 ?>

<?php
if (isset($_POST['Login']))
 {         
extract($_POST);                                                   
// code...
$Email=mysqli_real_escape_string($conn,$_POST['Email']);
$Password=mysqli_real_escape_string($conn,$_POST['Password']);

$log=mysqli_query($conn,"select * from login where Email='$Email' And Password='$Password'")
or die(mysqli_error($conn));
if (mysqli_num_rows($log)>0)
 {
  $fetch=mysqli_fetch_array($log);
  $_SESSION['id']=$fetch['id'];
  $_SESSION['Email']=$fetch['Email'];
$_SESSION['Password']=$fetch['Password']; // code...
 
echo "<script>" ;
echo "alert('login Successful');";
echo 'window.location.href="mHK1";';
echo "</script>";

}else
{ echo  "<script>";
echo "alert('login Unsuccessful');";
echo "</script>";


}
}
?> 