<?php
$firstname = filter_input(INPUT_POST,'firstname');
$lastname = filter_input(INPUT_POST,'lastname');
$email =filter_input(INPUT_POST,'email');
$city =filter_input(INPUT_POST,'city');
$country = filter_input(INPUT_POST,'country');
$phone = filter_input(INPUT_POST,'phonenumber');
$car = filter_input(INPUT_POST,'car');
$food = filter_input(INPUT_POST,'food');
$pet = filter_input(INPUT_POST,'pet');
$feed = filter_input(INPUT_POST,'feed');
$message = filter_input(INPUT_POST,'message');
if (!empty($firstname) || !empty($lastname) || !empty($email) || !empty($city) || !empty($country) || !empty($phonenumber) || !empty($car) || !empty($food) || !empty($pet) || !empty($feed) || !empty($message)) {
 $host = "localhost";
    $dbUsername = "root";
    $dbPassword = "";
    $dbname = "volunteer";
    $conn = new mysqli($host, $dbUsername, $dbPassword, $dbname);
    if (mysqli_connect_error()) {
     die('Connect Error('. mysqli_connect_errno().')'. mysqli_connect_error());
    } else {
            $sql = "INSERT INTO register (firstname,lastname,email,city,country,phonenumber,car,food,pet,feed,message)
            values ('$firstname','$lastname','$email','$city','$country','$phone','$car','$food','$pet','$feed','$message')";
if ($conn->query($sql)){
echo "New record is inserted sucessfully";
}
else{
echo "Error: ". $sql ."
". $conn->error;
}
$conn->close();
}
}
?>