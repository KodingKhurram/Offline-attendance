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
            -webkit-text-size-adjust: auto;
        }
        .logout input[type=submit]
        {
            width: 10%;
            -webkit-text-size-adjust: auto;
            background: red;
            color:white;
            padding: 14px 20px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            margin: 8px 0 8px 90%;
        }
    </style>
</head>
</html>
<body>
<div class="wrapper">
    <div class="logout">
        <a href="index.php"><input type="submit" value="LOG OUT"></a>
    </div>
    <?php include('header.php');?>
    <center>
        <h1>Select the semester</h1>
        <div class="select">
            <?php $branch=$_GET['branch'];echo '<a style="text-decoration: none" href="selectsubject.php?branch='.$branch.'&sem=1  "><div class="select"><br/><font style="align-content: center" color="#00008b" size="50">1</font></div></a>';?>
        </div>
        <div class="select">
            <?php $branch=$_GET['branch'];echo '<a style="text-decoration: none" href="selectsubject.php?branch='.$branch.'&sem=2  "><div class="select"><br/><font style="align-content: center" color="#00008b" size="50">2</font></div></a>';?>
        </div>
        <div class="select">
            <?php $branch=$_GET['branch'];echo '<a style="text-decoration: none" href="selectsubject.php?branch='.$branch.'&sem=3  "><div class="select"><br/><font style="align-content: center" color="#00008b" size="50">3</font></div></a>';?>
        </div>
        <div class="select">
            <?php $branch=$_GET['branch'];echo '<a style="text-decoration: none" href="selectsubject.php?branch='.$branch.'&sem=4  "><div class="select"><br/><font style="align-content: center" color="#00008b" size="50">4</font></div></a>';?>
        </div>
        <div class="select">
            <?php $branch=$_GET['branch'];echo '<a style="text-decoration: none" href="selectsubject.php?branch='.$branch.'&sem=5  "><div class="select"><br/><font style="align-content: center" color="#00008b" size="50">5</font></div></a>';?>
        </div>
        <div class="select">
            <?php $branch=$_GET['branch'];echo '<a style="text-decoration: none" href="selectsubject.php?branch='.$branch.'&sem=6  "><div class="select"><br/><font style="align-content: center" color="#00008b" size="50">6</font></div></a>';?>
        </div>
    </center>
</div>
</body>
</html>
