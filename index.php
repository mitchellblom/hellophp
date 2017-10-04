<html>
<head>
<Title>Hi There, PHP!</Title>
</head>
<body>
    <?php
        $name = "Jake";

        echo "Hello, " . $name;

        $loggedin  = true;

        if ($loggedin == true) {
            echo "You are logged in";
        } else {
            echo "Please log in";
        }
    ?>

    <form>
        <input type="text">
        <input type="submit">
    </form>
</body>
</html>