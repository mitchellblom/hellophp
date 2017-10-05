<html>
<head>
<Title>Hi There, PHP!</Title>
</head>
<body>
    <!-- <?php
        $name = "Jake";

        echo "Hello, " . $name;

        $loggedin  = true;

        if ($loggedin == true) {
            echo "You are logged in";
        } else {
            echo "Please log in";
        }
    ?> -->

    <!-- <form action="process.php" method="post">
        Enter your name:<input name="name" type="text">
        <input type="submit">
    </form> -->

    <?php
        $people = array("Alice", "Bob", "Cath");

        $numbers = array(5, 3, 7);

        // print_r($people);

        echo $people[2];

        foreach ($people as $person) {
            echo $person . " ";
        }
    ?>

</body>
</html>