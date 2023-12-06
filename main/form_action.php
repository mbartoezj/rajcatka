<html>
<head>
    <title>Results of the form</title>
</head>
<body>
<a href="web-form.php">Go back</a><br>
<?php
    $name_user = $_GET["username"];
    echo "username is: ";
    echo $name_user;
    echo "<br>password is: ";
    $pass = $_GET["password"];
    echo $pass;
    if (isset($_GET["age"])){
        echo "<br>age is: ";
        echo $_GET["age"];
    }
    if(isset($_GET["citizen"])){
        echo "<br>born in: ";
        echo $_GET["citizen"];
    }
    if(isset($_GET["student"])){
        echo "<br>occupation is: ";
        echo $_GET["student"];
    }
    if(isset($_GET["gender"])){
        echo "<br>gender is: ";
        echo $_GET["gender"];
    }
?>

</body>
</html>