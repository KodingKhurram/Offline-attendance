<?php error_reporting(0);?>
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
</html>
<body>
<div class="wrapper">
    <div class="logout">
        <a href="index.php"><input type="submit" value="LOG OUT"></a>
    </div>
    <?php include('header.php');?>
    <center>
        <h1>Add student list</h1>
    <div class="contact">
        <form method="post" action=" ">
            <select name='branch'>
                <option><i>Choose branch</i></option>
                <option>Computer science</option>
                <option>Information science</option>
                <option>Mechanical engineering</option>
                <option>Electric and electronic engineering</option>
            </select>
            <select name='sem'>
                <option><i>Choose sem</i></option>
                <option>1</option>
                <option>2</option>
                <option>3</option>
                <option>4</option>
                <option>5</option>
                <option>6</option>
            </select>
                <table style='text-align: center' align='center' width='100%' bgcolor='#e6e6fa' border='3'>
                    <th bgcolor='#deb887' height='30px'>Student Name</th>
                    <th bgcolor='#deb887' height='30px'>Student Regno</th>
            <?php
                for($i=0;$i<$_POST['nos'];$i++)
                {
                    echo "<tr>";
                    echo "<td><input type='search' placeholder='Enter student name' name='sname[$i]'></td>";
                    echo "<td><input type='search' placeholder='Enter student regno' name='regno[$i]'></td>";
                    echo "</tr>";
                }
                ?>
                </table>
            <input style='background-color: blue' type='submit' name='submit1' value='Add'>
            <input style="background-color: red" type="reset" value="Reset All">
            <h3>Note: Add all the student list at once before</h3>
        </form>

            <?php
        if(isset($_POST['submit1'])) {
            $branch = $_POST['branch'];
            $sem = $_POST['sem'];
            $name = $_POST['sname'];
            $reg = $_POST['regno'];
            $con = mysqli_connect('localhost', 'root', "");
            $db = $branch . "sem" . $sem;
            mysqli_select_db($con, $db);
            if ($sem == 1) {
                $table = ["", "Engineering Mathematics-1", "Applied Science", "Concept of Electric and Electronic Engineering", "Applied Science Lab", "Basic Electronics Lab", "Basic Computer Skills Lab"];
            }
            if ($sem == 2) {
                $table = ["", "Engineering Mathematics-2", "Communication Skills in English", "Digital and Computer Fundamentals", "Digital Electronics Lab", "Basic Web Design Lab", "Multimedia Lab"];
            }
            if ($sem == 3) {
                $table = ["", "Programming With C", "Computer Organisation", "Database Management System", "Computer Network", "Programming With C Lab", "DBMS and GUI lab", "Network Administration Lab"];
            }
            if ($sem == 4) {
                $table = ["", "Data Structures Using C", "OOP with Java", "Operating System", "Professional Ethics and Indian Constitution", "Data Structures Lab", "OOP with Java Lab", "Linux Lab"];
            }
            if ($sem == 5) {
                $table = ["", "Software Engineering", "Web Programming", "Desing and Analysis of Algorithms", "Green Computing", "Web Programming Lab", "Design and Analysis of Algorithms Lab", "Professional Practice Lab"];
            }
            if ($sem == 6) {
                $table = ["", "Software Testing", "Network Security", "Cloud Computing", "Software Testing Lab", "Network Security Lab"];
            }
            for ($k = 1; $k < sizeof($table); $k++)
            {
                $count = 0;
                $count1 = 0;
                $count3=0;
                for ($l = 0; $l < sizeof($reg); $l++)
                {
                    $query2 = "SELECT * FROM `$table[$k]` WHERE name='$name[$l]' AND regno='$reg[$l]' ";
                    $verify = mysqli_query($con, $query2);
                    while ($verrow = mysqli_fetch_assoc($verify))
                    {
                        if ($verrow['regno'] == $reg[$l])
                        {
                            $count++;
                        }
                    }
                }
                for ($j = 0; $j < sizeof($reg); $j++)
                {
                    if(preg_match("/[0-9][0-9][0-9][a-z,A-Z][a-z,A-Z][0-9][0-9][0-9][0-9][0-9]/",$reg[$l]))
                    {
                        $query3 = "SELECT * FROM `$table[$k]`";
                        $numcoltest = mysqli_query($con, $query3);
                        $numcol = mysqli_num_fields($numcoltest);
                        $query = "INSERT INTO `$table[$k]` VALUES ('$name[$j]','$reg[$j]'";
                        if ($numcol == 2)
                        {
                            $query = $query . ")";
                        } else {
                            for ($m = 2; $m < $numcol; $m++)
                            {
                                $query = $query . ",' '";
                                if ($m == $numcol - 1)
                                {
                                    $query = $query . ")";
                                }
                            }
                        }
                        if (mysqli_query($con, $query))
                        {
                            $count1++;
                        }
                    }
                    else
                    {
                        $count3++;
                    }
                }
                $query1 = "ALTER TABLE `$table[$k]` ORDER BY regno ASC";
                mysqli_query($con, $query1);
            }
            echo $count."<br/>".$count1;
            if($count3==sizeof($reg))
                header('Location:http:addlist.php?count=6');
            elseif ($count3<sizeof($reg) && $count3!=0)
                header('Location:http:addlist.php?count=7');
            if ($count1==sizeof($reg))
                header('Location:http:addlist.php?count=3');
            elseif ($count1<sizeof($reg) && $count1!=0)
                header('Location:http:addlist.php?count=4');
            else
                header('Location:http:addlist.php?count=5');
            if($count==sizeof($reg))
                header('Location:addlist.php?count=1');
            elseif ($count<sizeof($reg) && $count!=0)
                header('Location:addlist.php?count=2');
        }
        ?>
    </div>
    </center>
</div>
</body>
</html>

