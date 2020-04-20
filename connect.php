<?php
$name = filter_input(INPUT_POST, 'name');
$marks = filter_input(INPUT_POST, 'marks');
$subject = filter_input(INPUT_POST, 'subject');
$usn = filter_input(INPUT_POST, 'usn');
$sem = filter_input(INPUT_POST, 'sem');
$grade = filter_input(INPUT_POST, 'grade');
if (!empty($name)){
if (!empty($marks)){
if (!empty($subject)){
if (!empty($usn)){
if (!empty($sem)){
if (!empty($grade)){
$host = "localhost";
$dbusername = "root";
$dbpassword = "";
$dbname = "record";
// Create connection
$conn = new mysqli ($host, $dbusername, $dbpassword, $dbname);
if (mysqli_connect_error()){
die('Connect Error ('. mysqli_connect_errno() .') '
. mysqli_connect_error());
}
else{
$sql = "INSERT INTO marksheet (name, marks, subject, usn,sem,grade)
values ('$name','$marks','$subject','$usn','$sem','$grade')";
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
else{
    echo "grade should not be empty";
    die();
    }
}
else{
    echo "sem should not be empty";
    die();
    }
}
else{
    echo "USN should not be empty";
    die();
    }
}
else{
    echo "Subject should not be empty";
    die();
    }
}
else{
echo "Marks should not be empty";
die();
}
}
else{
echo "Name should not be empty";
die();
}
?>