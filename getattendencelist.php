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
        <?php
        error_reporting(0);
        $branch=$_GET['branch'];
        $sem=$_GET['sem'];
        $subject=$_GET['subject'];
        echo "<h1 style='color: darkblue'>".$branch."<br/>"."Semester : ".$sem."</h1>";
        echo "<h1 style='color: darkred'>Attendence for: ".$subject."</h1>";
        $con = mysqli_connect('localhost', 'root', '');
        $db=$branch."sem".$sem;
        mysqli_select_db($con, $db);
        $query = "SELECT * FROM `$subject`";
        $result=mysqli_query($con,$query);
        echo "<div class='attendtable'>";
        echo "<table style='text-align: center' align='center' width='80%' bgcolor='#e6e6fa' border='5'>";
        echo "<th bgcolor='#deb887' height='30px'>Student Name</th>";
        echo "<th bgcolor='#deb887' height='30px'>Student Regno</th>";
        $date=date("d-M-Y");
        echo "<th width='30%' bgcolor='#deb887' height='30px'>".$date."</th>";
        for($i=1;$i<($row = mysqli_fetch_assoc($result));$i++)
        {
            echo "<tr>";
            echo "<td>".$row['name']."</td>";
            echo "<td>".$row['regno']."</td>";
            echo '<form action="takeattendence.php?branch='.$branch.'&sem='.$sem.'&subject='.$subject.'&date='.$date.'  " method="post">';
            echo "<td>"."<input type='radio' value='Present' name='PorA[$i]'>"."Present"."<input type='radio' value='Absent' name='PorA[$i]'>"."Absent"."</td>";
            echo "</tr>";
        }
        echo "</table>";
        echo "<input style='width: 30%' type='submit' name='submit' value='Submit'>";
        echo "&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp";
        echo "<input style='background-color: red;width: 30%' type='reset' name='reset' value='Reset All'>";
        echo "</div>";
        ?>
    </center>
</div>
</body>
</html>
