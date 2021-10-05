<html>
<head>
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
    <?php include('header.php');?>
    <center>
        <h1>Select the theory subject</h1>
        <?php
        $branch=$_GET['branch'];
        $sem=$_GET['sem'];
        if($branch=="Computer science")
        {
            if ($sem == 1) {
                $subject = ["", "Engineering Mathematics-1", "Applied Science", "Concept of Electric and Electronic Engineering"];
            }
            if ($sem == 2) {
                $subject = ["", "Engineering Mathematics-2", "Communication Skills in English", "Digital and Computer Fundamentals"];
            }
            if ($sem == 3) {
                $subject = ["", "Programming With C", "Computer Organisation", "Database Management System", "Computer Network"];
            }
            if ($sem == 4) {
                $subject = ["", "Data Structures Using C", "OOP with Java", "Operating System", "Professional Ethics and Indian Constitution"];
            }
            if ($sem == 5) {
                $subject = ["", "Software Engineering", "Web Programming", "Desing and Analysis of Algorithms", "Green Computing"];
            }
            if ($sem == 6)
            {
                $subject = ["", "Software Testing", "Network Security", "Cloud Computing"];
            }
            for ($i = 1; $i < sizeof($subject); $i++)
            {
                echo '<div style="width: 50%"class="contact">';
                echo '<a style="text-decoration: none" href="getattendencelist.php?branch=' . $branch . '&sem=' . $sem . '&subject=' . $subject[$i] . '  ">' . $subject[$i] . '</a>';
                echo '</div>';
                echo '<br/><br/><br/>';
            }
        }
        ?>
    </center>
</div>
</body>
</html>