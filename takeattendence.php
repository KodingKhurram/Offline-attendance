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
        <a style="text-decoration: none" href="index.php"><input type="submit" value="LOG OUT"></a>
    </div>
    <?php include('header.php');?>
    <center>
        <h1 style="color:white">Today's attendence</h1>
        <?php
        $branch=$_GET['branch'];
        $sem=$_GET['sem'];
        $subject=$_GET['subject'];
        $date=$_GET['date'];
        $PorA=$_POST['PorA'];
        $con = mysqli_connect('localhost', 'root', "");
        $db=$branch."sem".$sem;
        mysqli_select_db($con, $db);
        $query1="ALTER TABLE `$subject` ADD `$date` TEXT NULL";
        $query2= "SELECT * FROM `$subject`";
        mysqli_query($con,$query1);
        $result1=mysqli_query($con,$query2);
        for($j=1;$j<($row1 = mysqli_fetch_assoc($result1));$j++)
        {
            if($row1[$date]=="Present" || $row1[$date]=="Absent")
            {
                echo "<font face='cooper' color='red' size='5'>The attendence have already taken</font>";
                break;
            }
            else {
                $reg = $row1['regno'];
                $query3 = "UPDATE `$subject` SET `$date` ='$PorA[$j]' WHERE regno= '$reg' ";
                mysqli_query($con, $query3);
            }
        }
        $query2= "SELECT * FROM `$subject`";
        $result=mysqli_query($con,$query2);
        echo "<div class='attendtable'>";
        echo "<table style='text-align: center' align='center' width='99%' bgcolor='#e6e6fa' border='5'>";
        echo "<th bgcolor='#deb887' height='30px'>Student Name</th>";
        echo "<th bgcolor='#deb887' height='30px'>Student Regno</th>";
        echo "<th bgcolor='#deb887' height='30px'>$date</th>";
        for($i=1;$i<($row2 = mysqli_fetch_assoc($result));$i++)
        {
            echo "<tr>";
            echo "<td>".$row2['name']."</td>";
            echo "<td>".$row2['regno']."</td>";
            echo "<td>".$row2[$date]."</td>";
            echo "</td>";
            echo "</tr>";
        }
        echo "</table>";
        $present =0;$absent =0;
        $query= "SELECT * FROM `$subject`";
        $result2=mysqli_query($con,$query);
        while($row3 = mysqli_fetch_assoc($result2))
        {
            if($row3[$date]=="Present")
            {
                $present++;
            }
            if($row3[$date]=="Absent")
            {
                $absent++;
            }
        }
        echo "Student <font face='cooper' color='blue'>Present</font> are:"."$present";
        echo "<br/>";
        echo "Student <font face='cooper' color='red'>Absent</font> are:"."$absent";
        echo "</div>";
        ?>
<?php
