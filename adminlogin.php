<html>
<head>
    <title>admin login</title>
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <style type="text/css">
        .logout input[type=submit]
        {
            width: 10%;
            background: green;
            color:white;
            padding: 14px 20px;
            margin: 8px 0;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            margin-left: 90%;
        }
    </style>
</head>
<body>
<div class="wrapper">
    <div class="logout">
        <a style="text-decoration: none" href="index.php"><input type="submit" value="HOME">
        </a>
    </div>
<?php include('header.php');?>
    <div style="text-align: center;">
        <h1><span style="color: wheat">Login as an Administrator</span></h1>
    <div class="contact">
        <form method="post" action=" ">
                <label>
                    <input type="text" placeholder="Enter admin name" name="admin">
                </label>
                <label>
                <input type="password" placeholder="Enter admin password" name="adminpword">
            </label>
            <input type="submit" name="submit" value="Submit">
            <input style="background-color: red" type="reset" value="Reset">
        </form>
        <?php
        if(isset($_POST['submit']))
        {
            $admin=$_POST['admin'];
            $pword=$_POST['adminpword'];
            if($admin=="admin" && $pword=="attendence")
            {
                header('Location:http://localhost/offline attendence/adminpage.php');
            }
            else
            {
                echo "<span  style=\"font-family: cooper; color: red; \">The name and the password are incorrect...</span>";
            }
        }
        ?>
    </div>
    </div>
</div>
</body>
</html>