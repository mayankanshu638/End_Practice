<?php 
echo $_GET['Gender'];
echo $_GET['Inetrest[]'];
?>

<html>
    <head>
        <title>
            Form HTML
        </title>
    </head>
    <body>
        <form method="GET" action="fp.php">
            Username <input type="text" placeholder="Enter Username" name="username"><br>
            Password <input type="password" placeholder="Enter Password" name="password"><br>
            Email <input type="email" placeholder="Enter Email" name="email"><br>

            Gender - <br>
            Male <input type="radio" value="Male" name="Gender">
            Female <input type="radio" value="Female" name="Gender"><br>
            Interest<br>
            Coding <input type="checkbox" value="coding" name="Inetrest[]">
            Sports <input type="checkbox" value="sports" name="Interest[]">
          <br>Select Your city<br>
          <select name="city">
            <option value="dehradun">Dehradun</option>
            <option value="mussorie">Mussorie</option>
            <option value="haryana">Haryana</option>
            <option value="delhi">Delhi</option>
          </select>
            <input type="submit">
        </form>
    </body>
</hhtml>