<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>HTTP GET</title>
    </head>
    <body>
        <h1>Testing an HTTP Get Request Using PHP's SuperGlobals</h1>
        <?php
        if (!empty($_GET)) {                                           /// if the get request is not empty, then
            echo "<h2>Welcome $_GET[name]</h2>";                       /// echo the value under get request key called name
            echo "<h2>Your hobby is: $_GET[hobby]</h2>";               // echo the value under get request key called hobby
            /* foreach($_GET as $key => $value){                        /// loop through the get request as an associative array 
              echo "<h4>$key has a value of $value</h4>";                ///
              ;} */
            echo "<h2>Your pet is a: $_GET[pet]";                       // echo the value under get request key called pet
            echo "<h2>Your favourite food is: $_GET[food]";             // echo the value under get request key called food
        } else {
            echo "<h2>We do not have your name or hobby information</h2>";
        }
        ?>
        <p>There won't be any output if you forget to enter some query parameters such as:</p>
        <h4>?name=Lisa&hobby=Playing the Saxophone</h4>
        <p>to the end of the url.</p>

    </body>
</html>
