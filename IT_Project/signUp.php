<?php

$name           = $_POST['user'];
$zip            = $_POST['zip'];
$email          = $_POST['email'];
$phone          = $_POST['phone'];
$email_phone    = $_POST['E_P'];
$pass           = $_POST['pass1'];
$passLogIn      = $_POST['passLogIn'];
$selected_radio = $_POST['type'];

$conn = mysqli_connect("localhost", "root", "12345678", "mobilano");
if (mysqli_connect_error()) {
    echo ("error");
    die("failed to connext to db" . mysql_error());
} else {
    if ($selected_radio === 'admin') {
        $conn->query("insert into admin values ('$email','$phone','$name','$pass','$zip')");
        echo "<script> alert('admin added successfully')</script>";
        echo "<script type='text/javascript'> document.location = 'adminpage.php'; </script>";
    } elseif ($selected_radio === 'user') {
        $conn->query("insert into client values ('$email','$phone','$name','$pass','$zip')");
        echo "<script> alert('client added successfully')</script>";
        echo "<script type='text/javascript'> document.location = 'clientpage.php'; </script>";
    } else {
        $result = mysqli_query($conn, "SELECT * FROM client WHERE email = '$email_phone'");
        if ($result->num_rows != 0) {
            $re = mysqli_query($conn, "select password from client where email= '$email_phone' and password = '$passLogIn'");
            if ($re->num_rows != 0) {
                echo "<script type='text/javascript'> document.location = 'clientpage.php'; </script>";
            }
        } elseif ($result->num_rows == 0) {
            $rresult = mysqli_query($conn, "SELECT * FROM client WHERE phone_number = '$email_phone'");
            if (mysqli_num_rows($rresult) > 0) {
                $ree = mysqli_query($conn, "select password from client where phone_number= '$email_phone' and password = '$passLogIn'");
                if ($ree->num_rows != 0) {
                    echo "<script type='text/javascript'> document.location = 'clientpage.php'; </script>";
                }
            }
        }
    }
    $conn->close;
}
?>