<html>
<head>
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <style type="text/css">
        .addstdlist
        {
            display: inline-block;
            width: 30%;
            background: orangered;
            color:white;
            padding: 14px 20px;
            margin: 8px 0;
            border: solid 1px black;
            border-radius: 4px;
            cursor: pointer;
        }
        .viewlilst
        {
            display: inline-block;
            width: 30%;
            background: lawngreen;
            color:white;
            padding: 14px 20px;
            margin: 8px 0;
            border: solid 1px black;
            border-radius: 4px;
            cursor: pointer;
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
        <a style="text-decoration: none" href="index.php"><input type="submit" value="LOG OUT"></a>
    </div>
    <?php include('header.php');?>
<div style="text-align: center;color: snow">
    <h1>Admin</h1>
    <div class="addstdlist">
        <a style="text-decoration: none;text-align: center;" href="addlist.php">
            <span style="font-family: times of roman; color: black; font-size: 15pt">Add list of students</span>
        </a>
    </div>
    <br/><br/>
    <div class="viewlilst">
        <a style="text-decoration: none;text-align: center" href="Viewlist.php">
            <span style="font-family: times of roman; color: black; font-size: 15pt">View students list</span>
        </a>
    </div>
</div>
</div>
</body>
</html>

