<!DOCTYPE html>
<html lang="en">
<head>
    
    <title>Forms</title>
</head>
<body>
    <section>
        welcome
            <?php
            $un = $_GET["reg_un"];
            $pw = $_GET["reg_pass"];
            $ci = $_GET["reg_c"];

            if ($un == "roy" && $pw == "weizman" && $ci == "modiin")
                echo "<h2>Good morning user: " . $un . "</h2>";

            else
                echo "<h2>Invalid name or password" . $un . "</h2>";

            ?>
    </section>
    
</body>
</html>