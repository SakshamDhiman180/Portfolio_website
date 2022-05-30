<?php
$db_hostname = "localhost";
$db_username = "root";
$db_password = "";
$db_name= "test_form";

$conn = mysqli_connect($db_hostname,$db_username,$db_password,$db_name);
if(!$conn){
    echo"conection failed: ".mysqli_connect_error();
    exit;
}
if(isset($_POST['submit'])){
    if(!empty($_POST['Firstname']) && !empty($_POST['Email']) && !empty($_POST['contect_no']) && !empty($_POST['city'])&& !empty($_POST['subject'])){
        
        $Firstname=$_POST['Firstname'];
        $email=$_POST['Email'];
        $contect_no=$_POST['contect_no'];
        $city=$_POST['city'];
        $subject=$_POST['subject'];

        $sql = "INSERT INTO test (Firstname, Email, contect_no, city, subject) VAlUES ('$Firstname','$email','$contect_no','$city','$subject')";

        $run = mysqli_query($conn,$sql)  or die (mysqli_error());     
        if($run){
            echo "form submitted sucessfully";
        }
        if(!$run){
            echo "form not submitted";
        }
}
    }
    else{
        echo "all fields are req.";
    }



?>
