<?php
$name = $_POST['name'];
$description = $_POST['description'];
$genre = $_POST['select'];
$url = $_POST['gameURL'];

if($name == '' || $description == '' || $url == ''){
    echo("PLS INPUT ALL FIELDS");
    header("Location:addGameTest.php");
}

else{
    $conn = new mysqli("localhost", "root", "marvin", "reviewschema");

        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
            echo "failed";
        } 
        echo "Connected successfully";

    $sql = "INSERT INTO game (gameName, gameDescription, genreID, gameVidURLHolder)
    VALUES ('$name', '$description', $genre, '$url')";

    if ($conn->query($sql) === TRUE) {
        echo "New record created successfully";
        header("Location:addGameTest.php");
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
    $conn->close();
}
?>