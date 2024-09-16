<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Game List</title>
        <meta charset="UTF-8"/>
        <meta name="author" content="Raivo Kingovskis"/>
        <meta name="description" content="The Ultimate List is a webpage for me and me only to 
        make a list of games, I've played, anime I've watched and books I've read. If someone else comes 
        across this page, please kindly go away."/>
        <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
        <meta property="og:image" content="../Style/index.css"/>
        <meta property="og:description" content="The Ultimate List is a webpage for me and me only to 
        make a list of games, I've played, anime I've watched and books I've read. If someone else comes 
        across this page, please kindly go away."/>
        <meta property="og:title" content="Game List"/>
        <link rel="icon" href="../icon.jpg" type="image/x-icon"/>
        <link rel="stylesheet" href="../Style/index.css"/>
    </head>
    <body>
        <header id="HeaderBackgroundColor">
            <?php
                $webpageName = "Games";
                //Creates the header
                require "../Header/header.php";
            ?>
        </header>
        <main>
            <?php
                //Creates the popup that changes the page's design colour
                require "./ColorPopup.php";  
            ?>
            <section>
                <?php 
                    //Creates articles that contain list data
                    require "./List.php"; 
                ?>
            </section>
        </main>
        <?php
            //Creates the footer
            require "./Footer/footer.php";
        ?>
    </body>
</html>