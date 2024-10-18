<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    generateTable(3, 4);
    function generateTable($row, $col)
    {
        echo "<table>";
        $count = 1; //This is for row counter since I can't use the $i for increment because it will mess up the loop
        for ($i = 0; $i < $row; $i++) { //This is for overall loop, which is to display and looping the rows
            if ($i == 0) { //This statement is for to show the header because its hard to imitate the design of this project if there is no condition. 
                for ($x = 0; $x <= $col; $x++) { //The goal of this to print the row header or the table header
                    if ($x == 0) {
                        echo "<th> </th>";
                    } else {
                        echo "<th> Column $x </th>";
                    }
                }
            }
            echo "<tr>";
            for ($j = -1; $j < $col; $j++) { //This is for to display the columns in each row
                if ($j == -1) { //This statement is if variable $j is equal to -1 it will print the column row header such "Row #"
                    echo "<td class='rownum'> Row " . $count++ . "</td>";
                } else { //Else it will print all the columns
                    echo "<td> x[$i][$j] </td>";
                }
            }
            echo "</tr>";
        }
        echo "</table>";
    }
    ?>
</body>

</html>