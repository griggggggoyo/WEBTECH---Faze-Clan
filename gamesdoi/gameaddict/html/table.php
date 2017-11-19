<?php
session_start();
require 'database.php';
$_SESSION['SEARCHEDGAME'] ="tukan";
?>

<DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
  </head>
  <body>
      <div id="content">
      <form method ="POST" action="<?php echo $_SERVER['PHP_SELF'];?>">
          <?php
                  $displayTable= "SELECT * FROM GAME WHERE gameName LIKE 'tukan%'";

                  $result=mysqli_query($db,$displayTable);
                while($row=mysqli_fetch_array($result,MYSQLI_ASSOC)){
                echo "{$row['gameName']} ";
                }

          ?>

      </form></div>
    </body>
  </html>
