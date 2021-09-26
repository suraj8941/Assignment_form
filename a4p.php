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
        <h1 class="font-formatted-1" style="font-size: 2rem;color: var(--red)">OPERATION'S OUTPUT</h1>
    </div>

    <div class="output flex-container ">
        <div class="flex-item">
            <?php
            if (isset($_POST['submit'])) {
                if ($_POST['md5']) {
                    echo "<div>MD5: ", md5($_POST['md5']), "</div>\n";
                } else {
                    echo "<div>Enter string:<div>\n";
                }

                if ($_POST['number-format']) {
                } else {
                    echo "<div>Enter string:</div>\n";
                }

                if ($_POST['ord']) {
                    echo "<div>ASCII code of the first character: ", ord($_POST['ord']), "</div>\n";
                } else {
                    echo "<div>Enter data for ASCII code:</div>\n";
                }

                if ($_POST['rtrim']) {
                    echo "<div>Right-trim Output: ", rtrim($_POST['rtrim']), "</div>\n";
                } else {
                    echo "<div>Enter string\n for trimming to right operation</div>\n";
                }

                if ($_POST['strreplace']) {
                } else {
                    echo "<div>Enter string:</div>\n";
                }

                if ($_POST['strlen']) {
                    echo "<div>String length: ", strlen($_POST['strlen']), "</div>\n";
                } else {
                    echo "<div>Enter string to find its length:</div>\n";
                }

                if ($_POST['strcasecmp']) {
                } else {
                    echo "<div>Enter string</div>\n";
                }
                if ($_POST['strrpos']) {
                } else {
                    echo "<div>Enter string</div>\n";
                }

                if ($_POST['substr']) {
                } else {
                    echo "<div>Enter string</div>";
                }

                if ($_POST['strtolower']) {
                    echo "<div>ENTERED STRING IN LOWER CASE: ", strtolower($_POST['strtolower']), "</div>\n";
                } else {
                    echo "<div>Enter string:\n</div>";
                }

                if ($_POST['bintohex']) {
                    echo "<div>Hexadecimal value: ", bin2hex($_POST['bintohex']), "</div>\n";
                } else {
                    echo "<div>Enter string:</div>\n";
                }

                if ($_POST['chop']) {
                    echo "<div>Result of chopping: ", chop($_POST['chop']), "</div>\n";
                } else {
                    echo "<div>Enter string:</div>\n";
                }
            }
            ?>

        </div>

    </div>

</body>

</html>
