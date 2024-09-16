<?php

$img = $_POST["img"];
$title = $_POST["title"];
$release_date = $_POST["release_date"];
$description = $_POST["description"];
$developer = $_POST["developer"];
$game_completion = filter_input(INPUT_POST, "game_completion", FILTER_VALIDATE_INT);
$rating = filter_input(INPUT_POST, "rating", FILTER_VALIDATE_INT);

if (!$img || !$title || !$release_date || !$description || !$developer || !$game_completion || !$rating) {
    die("All entries must be filled");
}

$host = "localhost";
$dbname = "ultimatelist";
$username = "root";
$password = "";

$conn = mysqli_connect($host, $username, $password, $dbname);

if (mysqli_connect_errno()) {
    die("Connection error: " . mysqli_connect_error());
}

$sql = "INSERT INTO games (img, title, release_date, description, developer, game_completion, rating) VALUES (?, ?, ?, ?, ?, ?, ?)";

$stmt = mysqli_stmt_init($conn);

if (!mysqli_stmt_prepare($stmt, $sql)) {
    die(mysqli_error($conn));
}

mysqli_stmt_bind_param($stmt, "sssssii", $img, $title, $release_date, $description, $developer, $game_completion, $rating);

mysqli_stmt_execute($stmt);

echo "Record saved.";