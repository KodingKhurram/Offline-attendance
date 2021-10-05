<?php error_reporting(0);?>
<html>
<head>
    <title>
        Add list of students
    </title>
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <style type="text/css">
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
    <?php include('header.php'); ?>
    <div style="text-align: center;">
    <h1> Add student list </h1>
        <div class="contact">
            <form action="addlistdb.php" method="post">
                <input type="search" name="nos" placeholder="Enter number of students">
                <input type="submit" name="submit"  value="submit">
                <input style="background-color: red" type="reset" value="Reset">
            </form>
            <?php
            $count=$_GET['count'];
            if ($count == 1)
                echo "<span   style=\"font-family: cooper; color: red; \">All the given data already exist...<br/></span>";
            if ($count == 2)
                echo "<span   style=\"font-family: cooper; color: red; \">" . "Some of the given data already exist...<br/></span>";
            if ($count == 3)
                echo "<span  style=\"font-family: cooper; color: blue; \">All the data added successfully...</span><br/>";
            if($count == 4)
                echo "<span  style=\"font-family: cooper; color: blue; \">Some of the date added successfully...</span><br/>";
            if($count == 5)
                echo "<span  style=\"font-family: cooper; color: red; \">Error in adding the data...</span><br/>";
            if ($count == 6)
                echo "<span   style=\"font-family: cooper; color: red; \">All of the regno were wrong<br/></span>";
            if ($count == 7)
                echo "<span   style=\"font-family: cooper; color: red; \">Some of the regno were wrong<br/></span>";
            ?>
        </div>
    </div
</div>
</body>
</html>

