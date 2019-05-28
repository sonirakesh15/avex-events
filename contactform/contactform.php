<?php
if($_POST){
    $hospital_name = $_POST['hospital_name'];
    $state = $_POST['state'];
    $district = $_POST['district'];
    $person_name = $_POST['person_name'];
    $mobileNo = $_POST['mobileNo'];
    $email = $_POST['email'];
    $message = $_POST['message'];

    $finalMsg= "Hospital Name : ".$hospital_name." State: ".$state." District: ".$district." Name: ".$person_name." MobileNo:".$mobileNo." Email: ".$email." Message: ".$message ;

//send email
    mail("ankitanand@live.com", "*AVEXEVENTS* This is an email from : " .$email, $finalMsg);
}
?>