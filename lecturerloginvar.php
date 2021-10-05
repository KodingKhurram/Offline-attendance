<?php
    $error=0;
    $name = $_POST['name'];
    $pword = $_POST['pword'];
    $branch = $_POST['branch'];
    $con = mysqli_connect('localhost', 'root', '');
    mysqli_select_db($con, 'lecturer');
    $verify = mysqli_query($con, "SELECT * FROM `$branch` WHERE name='$name' AND pword='$pword' ");
    while ($verrow = mysqli_fetch_assoc($verify))
    {
        if ($verrow['pword'] == $pword && $verrow['name'] == $name)
        {
            $flag=1;
            break;
        }
    }
    if($flag==1)
    {
        header('location:http://localhost/offline attendence/lecturerpage.php?branch=' . $branch . ' ');
    }
    else
        header('Location:http://localhost/offline attendence/lecturerlogin.php?error=1 ');
?>

