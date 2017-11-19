<?php
$rating = $_POST['rating'];
$review = $_POST['comments'];

if($rating == '' || $review == ''){
    echo("PLS INPUT ALL FIELDS");
    header("Location:addReview.php");
}

else{
    $conn = new mysqli("localhost", "webtech", "", "reviewschema");

        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
            echo "failed";
        } 
        echo "Connected successfully";

    $sql = "INSERT INTO review (reviewRating, reviewText, gameID, userID)
    VALUES ($rating, '$review', 1, 1)";

    if ($conn->query($sql) === TRUE) {
        echo "New record created successfully";
        header("Location:addReview.php");
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
    $conn->close();
}
?>
