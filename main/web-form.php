<html>
    <head>
        <title>Web form</title>
    </head>
    <body>
        <a href="index.php"> Go back</a>
        <div>
            <form action="form_action.php" method="GET"> <!--a php file which does something, it is sent when the form is submitted-->
                <select name="age" id="dropdown">
                <?php
                    for ($i=1; $i<100; $i++){
                        echo "<option value=\"$i\">$i</option>";
                        /*echo '<option value='.$i.'>$i</option>';
                        echo '<option value=';
                        echo $i;
                        echo '>$i</option>';*/
                    }
                ?>
                </select><br>
                <input type="text" name="username" id="username" placeholder="username"><br>
                <input type="password" name="password" id="password" placeholder="password"><br>
                <input type="radio" name="gender" value="male" id="male">
                <label for="male">Male</label><br>
                <input type="radio" name="gender" value="female" id="female">
                <label for="female">Female</label><br>
                <input type="checkbox" id="citizen" name="citizen" value="Estonia">
                <label for="citizen">I come from Estonian</label><br>
                <input type="checkbox" id="student" name="student" value="Student">
                <label for="student">I am a student at TalTech</label><br>
                <br><input type="submit" name="submit" value="submit">
            </form>
        </div>
    </body>
</html>
