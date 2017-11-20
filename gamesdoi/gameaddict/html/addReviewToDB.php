<?php
session_start();
$rating = $_POST['rating'];
$review = $_POST['comments'];
$userID = $_SESSION["userID"];
$gameid = $_SESSION['gameid'];
$title = $_POST['title'];

if($rating == '' || $review == '' || $title == ''){
    echo "<script type='text/javascript'>alert('Please Enter All Fields');</script>";
    header("Location:addReview.php");
}

else{
    $conn = new mysqli("localhost", "root", "12345", "reviewschema");

        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
            echo "failed";
        }
        echo "Connected successfully";

    $sql = "INSERT INTO review (title, reviewRating, reviewText, gameID, userID)
    VALUES ('$title', $rating, '$review', $gameid, $userID)";

    if ($conn->query($sql) === TRUE) {
        echo "New record created successfully";
        header("Location:addReview.php");
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
    $conn->close();
}
?>
