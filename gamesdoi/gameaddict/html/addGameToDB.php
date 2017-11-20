<?php
$name = $_POST['name'];
$description = $_POST['description'];
$genre = $_POST['select'];
$url = $_POST['url'];
$developer = $_POST['developer'];
$cost = $_POST['cost'];
$platform = $_POST['platform'];
$date = date('Y-m-d', strtotime($_POST['date']));


echo $name;
echo $description;
echo $genre;
echo $url;

if($name == '' || $description == '' || $url == '' || $developer == '' || $cost == null || $platform == ''){
    echo("PLS INPUT ALL FIELDS");
    header("Location:addGame.php");
}
else{
    $conn = new mysqli("localhost", "root", "12345", "reviewschema");

        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
            echo "failed";
        }
        echo "Connected successfully";

    $sql = "INSERT INTO game (gameName, gameDescription, gamePrice, gamePlatform, dateReleased, gameDeveloper, genreID, gameVidURLHolder)
    VALUES ('$name', '$description', $cost, '$platform', '$date', '$developer', $genre, '$url')";

    if ($conn->query($sql) === TRUE) {
        echo "New record created successfully";
        header("Location:addGame.php");
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
    $conn->close();
}
?>
