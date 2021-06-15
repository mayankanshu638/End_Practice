<?php 
// $var1 = 10;
// $var = 20;
// $sum = $var1 + $var;
 $sum = $_GET['var1'] + $_GET['var2'];
 echo "Sum of 2 numbers is $sum";
?>
<html>
    <head>
        <title>
            My First Page
        </title>
    </head>
    <body>
    <form method="GET" action="f.php">
            Enter 2 numbers<br>
            Enter First Number <input type="number" name="var1" required>
            Enter Second Number <input type="number" name="var2" required>
            
            <br>
            <input type="submit" value="ADD">

            <br><br>
            <input type="text" value="$sum">
    </form>
    </body>
</html>