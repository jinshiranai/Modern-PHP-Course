<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="./simple.css" />
    <title>Document</title>
</head>

<body>
    <pre><?php

            // Single quote string examples
            // With concatenation (.) and escaping (\)

            $greeting = 'I\'m a string';
            echo $greeting . '!!!' . ' ' . $greeting;
            echo '<br>';

            $name = 'Jin';
            $subject = 'PHP';

            $text = 'I\'m ' . $name . ' and I want to learn ' . $subject;
            echo $text . '~';

            ?></pre>

</body>

</html>