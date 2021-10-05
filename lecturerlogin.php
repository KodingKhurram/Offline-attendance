<html>
<head>
<style type="text/css">
input[type=text], input[type=password], select
{
	width: 100%;
	padding: 12px 20px;
	margin: 8px 0
	display: in-block;
	margin-bottom: 8px;
	border: 1px solid #ccc;
	border-color: purple;
	border-radius: 4px;
	box-sizing: border-box;
}
input[type=submit]
{
	width: 100%;
	background: green;
	color:white;
	padding: 14px 20px;
	margin: 8px 0;
	border: none;
	border-radius: 4px;
	cursor: pointer;
}
.contact
{
	display: inline-block;
	max-width: 350px;
	margin: auto;
	border-radius: 5px;
	border: 3px solid black;
	background: white;
	padding: 20px;
	height: auto;
}
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
    <link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
<div class="wrapper">
    <div class="logout">
        <a style="text-decoration: none" href="index.php"><input type="submit" value="HOME">
        </a>
    </div>
    <?php include('header.php');?>
    <center>
        <h1>Login as a Lecturer</h1>
        <div class="contact">
            <form method="post" action="lecturerloginvar.php">
                <input type="text" placeholder="Enter your name" name="name">
                <input type="password" placeholder="Enter password" name="pword">
                <select name='branch'>
                <option><i>Choose branch</i></option>
                <option>Computer science</option>
                <option>Information science</option>
                <option>Mechanical engineering</option>
                <option>Electric and electronic engineering</option>
                </select>
                <input type="submit" name="login" value="Submit">
                <input style="background-color: red" type="reset" value="Reset">
                <?php
                error_reporting(0);
                if($_GET['error']==1)
                    echo "<font face='cooper' color='red'>Sorry...<br/>The name and password doesn't match</font>";
                ?>
            </form>
            <form action="newaccount.php" method="post">
                <input type="submit" name="submit" value="Create new account">
            </form>
        </div>
    </center>
    <br/><br/>
    <hr color="black" size="2">
</div>
</body>
</html>