<?php
    session_start();
    require '../db.php';

    if ($_SERVER["REQUEST_METHOD"] == "POST")
    {
        $name = dataFilter($_POST['name']);
        $mobile = dataFilter($_POST['mobile']);
        $user = dataFilter($_POST['uname']);
        $email = dataFilter($_POST['email']);
        $password = dataFilter($_POST['pass']);
       
        $_SESSION['Email'] = $email;
        $_SESSION['Name'] = $name;
        $_SESSION['Username'] = $user;
        $_SESSION['Mobile'] = $mobile;
        $_SESSION['Password'] = $password;
       
    }
    $id = $_SESSION['id'];

    $sql = "UPDATE members SET Name='$name',Username='$user',MobileNo='$mobile',Email='$email', Password='$pass' WHERE id='$id';";

    $result = mysqli_query($conn, $sql);
    {
        $_SESSION['message'] = "Profile Updated successfully !!!";
        header("Location: ../farmerviewprofile.php");
    }
function dataFilter($data)
{
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}


?>
