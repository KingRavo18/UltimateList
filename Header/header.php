<link rel="stylesheet" href="../Style/header.css">
<nav class="navigation">
        <a href="../Games/index.php" title="Games"><button id="GameNavButtonColor" class="navbutton">Games</button></a>
        <a href="../Books/books.php" title="Books"><button id="BookNavButtonColor" class="navbutton">Books</button></a> 
        <a href="../Anime/anime.php" title="Anime"><button id="AnimeNavButtonColor" class="navbutton">Anime</button></a> 
</nav>
    <div class="pageName">
        <?php  
            $webpageTitle = match($webpageName){
                'Games' => 'Games',
                'Books' => 'Books',
                'Anime' => 'Anime',
            };
            echo $webpageTitle;
        ?>  
    </div>

