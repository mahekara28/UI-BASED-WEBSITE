<?php
$name=$_POST['Name'];
$message=$_POST['Enter your Message'];

if(!empty($name)||!empty($message)){

    $host="localhost";
    $dbUsername="root";
    $dbPassword="";
    $dbname="web1";


    //create connection

$conn = new mysqli('localhost', 'root','','test');


if(mysqli_connect_error(){

die('Connect Error('. mysqli_connect_errno().')'. mysqli_connect_error());
}

    else{
       
        $INSERT = "INSERT Into web1 (name, message) values(? , ?)";

        // PREPARE STATEMENT

        $stmt = $conn->prepare($SELECT);
        $stmt = store_result();

if($rnum==0){
    $stmt->close();
    $stmt = $conn->prepare($INSERT);
    $stmt->bind_param("ssssii";$name, $message);

$stmt->execute();


alert("Message");
else{

    alert("No Message");
}

$stmt->close();

$conn->close();

}
    }

#CODE.....
}

else{
    echo"All field are required";
    die();
}

?>

