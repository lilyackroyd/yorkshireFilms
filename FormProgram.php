<!DOCTYPE html>
<html>

    <head>
        <!-- Required meta tags -->
        <meta charset="UTF-8">
        <title>Thank you</title>

        <!-- Bootstrap CSS & Stylesheet -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
        <link rel="stylesheet" type="text/css" href="SandwichStyle.css">
    </head>



    <body>

        <div class="container-sm">





            <!------THANK YOU OR ERROR MESSAGE---->
            <div class="formBlock-header"> 
                <?php
                if (!empty($_POST)) {
                    echo "<h3> Thank You </h3>";
                    echo "<p>Thank you for making a sandwich. Here are your order details: </p>";
                } else {
                    echo "<h4>You have not submitted any data to the server</h4>";
                }
                ?>
            </div>
            </br>

            <!------PERSONAL DETAILS OR ERROR MESSAGE---->

            <div class="formBlock"> 
                <?php
                if (!empty($_POST)) {
                    echo "<h3>Personal Deatails<h3>";
                    echo "<h4>Name: $_POST[firstName] $_POST[lastName]</h4>";
                    echo "<h4>Email: $_POST[email]</h4>";
                } else {
                    echo "<h4>You have not submitted any data to the server</h4>";
                }
                ?>

            </div>

            <!------SANDWICH SELECTION OR ERROR MESSAGE---->
            </br>
            <div class="formBlock"> 
                <?php
                if (!empty($_POST)) {
                    echo "<h3>Sandwich Selection<h3>";
                    echo "<h4>Bread: $_POST[breadType]</h4>";
                    echo "<h4>Mayo? $_POST[mayo]</h4>";
                    echo "<h4>Filling selection: </h4>";
                    foreach ($_POST['filling'] as $a) {
                        echo "<h4>$a </h4>";
                    }
                    if (!empty($_POST['toasted'])) {                                       //$_POST['toasted']=="Yes"
                        echo "<h4>Yes, toast my sandwich</h4>";
                    } else {
                        echo "<h4>No, don't toast my sandwich</h4>";
                    }

                    ;

                    if (!empty($_POST['otherRequests'])) {
                        echo "<h4>Additional requests: $_POST[otherRequests]</h4>";
                    } else {
                        echo "<h4>Additional requests: None";
                    }
                } else {
                    echo "<h4>You have not submitted any data to the server</h4>";
                }
                ////why do I have to put '' in some and not in others?
                ?>
            </div>
        </div>
    </body>
</html>