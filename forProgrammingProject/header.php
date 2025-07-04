<?php
if(!isset($_SESSION["userid"]))
{

 exit("login first!!");
 
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="here you can manage every thing">
    <title>Dashboard</title>
    <!-- Link for External Css File Which has General Styles, the root and Utilities Classes -->
    <link rel="stylesheet" href="style.css">
    <!-- Link for External Css File Which has the Styles for Main Content -->
    <link rel="stylesheet" href="dashboard.css">
    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@400;500;600;700;800&display=swap" rel="stylesheet">
    <!-- Google Fonts Ubuntu -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Ubuntu:wght@300;400;500;700&display=swap" rel="stylesheet">
    <!-- Script Tag For JavaScript External File -->
    <script src="main.js" defer></script>
</head>
<body>
    <header>
        <div class="container">
            <div class="even-column">
                <div class="even-column | logo">
                    <figure>

                        <?php
                        if(isset($_SESSION["userid"]))
                        {
                        ?>
                         <p>Hello <b><?php echo $_SESSION["useruid"];?></b> </p>
                        <?php
                        }
                        else
                        {
                        ?>
                        exit();
                        <?php
                        }
                        ?>
                    </figure>
                </div>
                <div class="icons even-column">
                    <a href="logout.inc.php">Log out</a>
                </div>
            </div>
        </div>
    </header>
