<html>

<head>
    <title>Your Favorite</title>
</head>

<body>
    <?php
        if ((isset($_POST['username'])) && (!ctype_space($_POST['username'])) && (!empty($_POST['username']))){
            if ((isset($_POST['color'])) && (!empty($_POST['color']))){
                if((isset($_POST['dish'])) && (!ctype_space($_POST['dish'])) && (!empty($_POST['dish']))){
                    echo "Thanks for your selection ", ($_POST['username']);
                    echo "<br>";
                    echo "You really enjoy ", ($_POST['dish']);
                    echo "<br>";
                    echo "- especially with a nice ", ($_POST['color']), " wine";
                } else{
                    echo "Error! Please enter your favorite dish.";
                }
            } else{
                echo "Error! Please select your color.";
            }
        } else { 
            echo "Error! Please enter your name and fill out the respective fields.";
        }
    ?>
</body>

</html>