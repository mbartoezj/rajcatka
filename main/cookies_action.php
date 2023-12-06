<html>
<head>
    <title>Are you authorized</title>
</head>
<body>
    <?php
        if ($_GET['submit'] == 'login'){
            if (isset($_COOKIE['authorized'])){
                $name = $_GET["username"];
                $pass = $_GET["password"];
                if ($_COOKIE['name'] == $name && $_COOKIE['pass'] == $pass){
                    echo 'you are logged in<br>';
                    echo '<a href="cookies.php">Log out</a>';
                } else {
                    echo 'Username or password is incorrect<br>';
                    echo '<a href="cookies.php">Try again</a>';
                }
            } else {
                echo 'please register first<br>';
                echo '<a href="cookies.php">Go back</a>';
            }
        } elseif ($_GET['submit'] == 'register'){
            if (isset($_COOKIE['name']) && isset($_COOKIE['pass'])){
                echo "you are already registered<br>";
                echo '<a href="cookies.php">Go back</a>';
            } else {
                setcookie('name', $_GET['username']);
                setcookie('pass', $_GET['password']);
                if ($_GET['username'] != '' && $_GET['password'] != ''){
                    setcookie('authorized', '1');
                    echo "you have been registered<br>";
                    echo '<a href="cookies.php">Go to login</a>';
                } else {
                    echo "please fill in the username and password<br>";
                    echo '<a href="cookies.php">Try again</a>';
                }
            }
        }
    ?>
</body>
</html>