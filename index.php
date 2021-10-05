<html>
<head>
<title>home</title>
    <link rel="stylesheet" type="text/css" href="css/style.css">
<style type="text/css">
    .select
    {
        margin-left: 16%;
        margin-top: 10%;
        display:inline-block;
        border-radius: 20%;
        border: solid 3px;
        background: #eee;
        height: 300px;
        width: 300px;
        text-align: center;
    }
</style>
</head>
<body bgcolor="white">
<div class="wrapper">
    <?php include('header.php');?>
        <div class="select">
            <a style="text-decoration: none" href="adminlogin.php"><br/><img src="images/target.png" height="240px" width="240px"><br/>Admin</a>
        </div>
        <div class="select">
            <a style="text-decoration: none" href="lecturerlogin.php"><br/><img src="images/presentation.png" height="240px" width="240px"><br/>Lecturer</a>
        </div>
</div>
</body>
</html>