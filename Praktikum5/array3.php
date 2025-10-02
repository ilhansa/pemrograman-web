<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" type="text/css" href="style.css">
    </head>
    <body>
        <h2> Multi dimensional array</h2>
        <table>
            <tr>
                <th> Judul Film </th>
                <th> Tahun </th>
                <th> Rating </th>
            </tr>
            <?php
                $movie = array (
                    array("Gundam ibo", 2015, 8),
                    array("Gundam exia", 2007, 7),
                    array("Gundam thunderbolt", 2012, 8)
                );
              
                echo "<tr>";
                echo "<td>" . $movie[0][0] . "</td>";
                echo "<td>" . $movie[0][1] . "</td>";
                echo "<td>" . $movie[0][2] . "</td>";
                echo "<tr>";

                echo "<tr>";
                echo "<td>" . $movie[1][0] . "</td>";
                echo "<td>" . $movie[1][1] . "</td>";
                echo "<td>" . $movie[1][2] . "</td>";
                echo "<tr>";
                
                echo "<tr>";
                echo "<td>" . $movie[2][0] . "</td>";
                echo "<td>" . $movie[2][1] . "</td>";
                echo "<td>" . $movie[2][2] . "</td>";
                echo "<tr>";
            ?>
        </table>
    </body>
</html>