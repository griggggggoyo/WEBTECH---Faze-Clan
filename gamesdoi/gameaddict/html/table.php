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
                  echo '<table width="75%" border="1" align="center" cellpadding="0" cellspacing="0" bordercolor="#000000">
                  <tr>
                  <td width="15%"><div align="center"><b> NAME
                  </div></b></td>
                  <td width="20%"><div align="center"><b> description
                  </div></b></td>
                  <td width="10%"><div align="center"><b> genreID
                  </div></b></td>
                  </tr>';

                while($row=mysqli_fetch_array($result,MYSQLI_ASSOC)){
                echo "<tr>
                <td width=\"15%\"><div align=\"center\">{$row['gameName']}
                </div></td>
                <td width=\"10%\"><div align=\"center\">{$row['gameDescription']}
                </div></td>
                <td width=\"10%\"><div align=\"center\">{$row['genreID']}
                </div></td>
                </tr>
                ";
                }
                echo '</table>';

          ?>


      </form></div>
    </body>
  </html>
