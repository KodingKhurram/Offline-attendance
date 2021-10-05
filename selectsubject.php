<html>
<head>
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <style type="text/css">
    .select
    {
        display:inline-block;
        border-radius: 20%;
        border: solid 3px;
        background: #eee;
        height: 120px;
        width: 120px;
        text-align: center;
    }
    .logout input[type=submit]
    {
        width: 10%;
        background: red;
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
        <a href="index.php"><input type="submit" value="LOG OUT"></a>
    </div>
    <?php include('header.php');?>
    <div style="text-align: center;">
        <div class="select">
            <?php $branch=$_GET['branch'];$sem=$_GET['sem'];echo '<a style="text-decoration: none" href="theoryattendence.php?branch='.$branch.'&sem='.$sem.'  "><br/><img src="images/red contact.jfif" height="80px" width="80px"><br/>Theory</a>';?>
        </div><br/><br/><br/>
        <div class="select">
            <?php $branch=$_GET['branch'];$sem=$_GET['sem'];echo '<a style="text-decoration: none" href="labattendence.php?branch='.$branch.'&sem='.$sem.'"><br/><img src="images/teacher." height="80px" width="80px"><br/>Lab</a>';?>
        </div>
    </div>
</div>
</div>
</body>
</html>
