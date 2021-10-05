<html>
<head>
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
        <a href="index.php"><input type="submit" value="HOME"></a>
    </div>
    <?php include('header.php');?>
    <center>
        <h1>Create new account</h1>
        <div class="contact">
            <form action=" " method="post">
                <input type="text" placeholder="Enter your name" name="name">
                <input type="password" placeholder="Enter password(Exactly 8 digits)" name="password">
                <select name='branch'>
                    <option><i>Choose branch</i></option>
                    <option>Computer science</option>
                    <option>Information science</option>
                    <option>Mechanical engineering</option>
                    <option>Electric and electronic engineering</option>
                </select>
                <input type="submit" name="login" value="Create">
                <input style="background-color: red" type="reset" value="Reset">
            </form>
            <?php
            if(isset($_POST['login']))
            {
                $name = $_POST['name'];
                $pword = $_POST['password'];
                $branch = $_POST['branch'];
                $con = mysqli_connect('localhost', 'root', '');
                mysqli_select_db($con, 'lecturer');
                $verify = mysqli_query($con, "SELECT * FROM `$branch` WHERE `name`='$name' AND `pword`='$pword' ");
                while ($verrow = mysqli_fetch_assoc($verify))
                {
                    if ($verrow['pword'] == $pword && $verrow['name']==$name)
                    {
                        echo "<span   style=\"font-family: cooper; color: red; \">" . "The given account is already exist...<br/>" . "</span>";
                        exit(0);
                    }
                }
                if(preg_match("/[0-9,a-z,A-Z][0-9,a-z,A-Z][0-9,a-z,A-Z][0-9,a-z,A-Z][0-9,a-z,A-Z][0-9,a-z,A-Z][0-9,a-z,A-Z][0-9,a-z,A-Z]/",$pword))
                {
                    echo "jaa";
                    $query = "INSERT INTO `$branch` VALUES('$name','$pword')";
                    echo $query;
                    if (mysqli_query($con,$query))
                    {
                        header('location:http://localhost/offline attendence/lecturerpage.php?branch='.$branch.' ');
                    } else
                    {
                        echo "<span  style=\"font-family: cooper; color: red; \">Error in creating, try again later...</span>" . "<br/>";
                    }
                }
                else
                    {
                        echo "<span  style=\"font-family: cooper; color: red; \">The password is less than 8 digits...</span>";
                    }
            }
            ?>
        </div>
    </center>
</div>
</body>
</html>

