<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <form method="POST" action="addGameToDB.php">
        Game Name:<input type="text" name="name" id="name"><br>
        Game Description: <input type="textarea" name="description" id="description"><br>
        Genre: <?php 
        $conn = new mysqli("localhost", "root", "marvin", "reviewschema");
    
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
            echo "failed";
        } 
        
        $sql = "SELECT genreID, genreName FROM genre";
                $result = $conn->query($sql);
                if ($result->num_rows > 0) {
                    // output data of each row
                    $select =  '<select name="select">';
                  
                    while($row = $result->fetch_assoc()) {
                        $select.='<option value="'.$row['genreID'].'">'.$row['genreName'].'</option>';
                    }
                }
                else {
                    echo "0 results";
                }
                $select.='</select>';
                echo $select;
                $conn->close();
                ?><br>
        Game URL: <input type="text" name="gameURL" id="gameURL"><br>
        <input type="submit" value="Submit" id="submit" name="submit">
        </form>
    </body>
</html>
