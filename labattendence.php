
<html>
<head>
    <link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
<div class="wrapper">
    <?php include('header.php');?>
    <center>
        <h1>Select the Lab</h1>
        <?php
        $branch=$_GET['branch'];
        $sem=$_GET['sem'];
        if($branch=="Computer science")
        {
            if ($sem == 1)
            {
                $subject = ["","Applied Science Lab", "Basic Electronics Lab","Basic Computer Skills Lab"];
            }
            if ($sem == 2)
            {
                $subject = ["","Digital Electronics Lab", "Basic Web Design Lab", "Multimedia Lab"];
            }
            if ($sem == 3)
            {
                $subject = ["", "Programming With C Lab", "DBMS and GUI lab", "Network Administration Lab"];
            }
            if ($sem == 4)
            {
                $subject = ["", "Data Structures Lab", "OOP with Java Lab", "Linux Lab"];
            }
            if ($sem == 5)
            {
                $subject = ["","Web Programming Lab", "Design and Analysis of Algorithms Lab","Professional Practice Lab"];
            }
            if ($sem == 6)
            {
                $subject = ["", "Software Testing Lab", "Network Security Lab"];
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
</html><?php
