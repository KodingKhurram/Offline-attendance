
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
        <hr color="white" size="1">
        <a style="text-decoration: none" href="index.php"><input type="submit" value="LOG OUT"></a>
    </div>
    <?php include('header.php');?>
    <div style="text-align: center;">
        <h1 style="color: white">View list</h1>
    <div class="contact">
        <form action=" " method="post">
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
            <input type="submit" name="submit" value="submit">
            <input style="background-color: red" type="reset" value="Reset">
        </form>
            <?php
            error_reporting(0);
            if(isset($_POST['submit']))
            {
                $branch = $_POST['branch'];
                $sem = $_POST['sem'];
                $table = "attendence".$sem;
                $con = mysqli_connect(localhost, root, "");
                $db=$branch."sem".$sem;
                mysqli_select_db($con, $db);
                if($sem==1)
                {
                    $table="engineering mathematics-1";
                }
                if($sem==2)
                {
                    $table="engineering mathematics-2";
                }
                if($sem==6)
                    {
                        $table="software testing";
                    }
                $query = "SELECT * FROM `$table`";
                $result=mysqli_query($con,$query);
                echo "<table align='center' width='99%' bgcolor='#e6e6fa' border='5'>";
                echo "<th bgcolor='#deb887' height='30px'>Student Name</th>";
                echo "<th bgcolor='#deb887' height='30px'>Student Regno</th>";
                while ($row = mysqli_fetch_assoc($result))
                {
                    echo "<tr>";
                    echo "<td>".$row['name']."</td>";
                    echo "<td>".$row['regno']."</td>";
                    echo "</td>";
                }
            }
            ?>
        </table>
    </div>
    </div>
</div>
</body>
