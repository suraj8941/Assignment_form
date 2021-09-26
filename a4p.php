<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="a4s.css">
    <title>Assignment-4</title>
</head>

<body>

    <div class="flex-container">
        <h1 class="font-formatted-1" style="font-size: 2rem;color: var(--blue)">OPERATION'S OUTPUT</h1>
    </div>

    <div class="output flex-container ">
        <div class="flex-item">
            <?php
            if (isset($_POST['submit'])) {
                if ($_POST['md5']) {
                    echo "<div>MD5 hash: ", md5($_POST['md5']), "</div>\n";
                } else {
                    echo "<div>ENTER DATA for MD5<div>\n";
                }

                if ($_POST['number-format']) {
                } else {
                    echo "<div>ENTER DATA</div>\n";
                }

                if ($_POST['ord']) {
                    echo "<div>ASCII of the first character is: ", ord($_POST['ord']), "</div>\n";
                } else {
                    echo "<div>ENTER DATA for ASCII code</div>\n";
                }

                if ($_POST['rtrim']) {
                    echo "<div>STRING AFTER Right-trim: ", rtrim($_POST['rtrim']), "</div>\n";
                } else {
                    echo "<div>ENTER DATA\n for trimming to right</div>\n";
                }

                if ($_POST['strreplace']) {
                } else {
                    echo "<div>ENTER DATA</div>\n";
                }

                if ($_POST['strlen']) {
                    echo "<div>STRING LENGTH IS: ", strlen($_POST['strlen']), "</div>\n";
                } else {
                    echo "<div>ENTER DATA for calculating String length</div>\n";
                }

                if ($_POST['strcasecmp']) {
                } else {
                    echo "<div>ENTER DATA</div>\n";
                }
                if ($_POST['strrpos']) {
                } else {
                    echo "<div>ENTER DATA</div>\n";
                }

                if ($_POST['substr']) {
                } else {
                    echo "<div>ENTER DATA</div>";
                }

                if ($_POST['strtolower']) {
                    echo "<div>ENTERED STRING IN LOWER CASE: ", strtolower($_POST['strtolower']), "</div>\n";
                } else {
                    echo "<div>ENTER DATA for converting string to lower case.\n</div>";
                }

                if ($_POST['bintohex']) {
                    echo "<div>ENTERED STRING'S hexadecimal value: ", bin2hex($_POST['bintohex']), "</div>\n";
                } else {
                    echo "<div>ENTER DATA for converting to hexadecimal</div>\n";
                }

                if ($_POST['chop']) {
                    echo "<div>ENTERED STRING AFTER USING CHOP FUNCTION: ", chop($_POST['chop']), "</div>\n";
                } else {
                    echo "<div>ENTER DATA for chopping</div>\n";
                }
            }
            ?>

        </div>

    </div>

</body>

</html>