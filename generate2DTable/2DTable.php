<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> 2D Table </title>
    <style>
        * {
            font-family: Roboto Mono;
            font-size: 16px;
        }

        table {
            background-color: #000000;
            border: 1px solid black;
            margin-bottom: 12px;
        }

        td {
            padding: 32px;
        }

        tr {
            background-color: #ffffff;
        }

        th,
        .rownum {
            padding: 32px;
            font-weight: bold;
            background-color: #3B8398;
            color: #fff;
        }
    </style>
</head>

<body>
    <?php
    generate2DArrayTable(4, 3);
    function generate2DArrayTable($row, $col)
    {
        $array2D = [];
        echo "<table>";
        $count = 1; //This is for row counter since I can't use the $i for increment because it will mess up the loop
        for ($i = 0; $i < $row; $i++) { //This is for overall loop, which is to display and looping the rows
            if ($i == 0) { //This statement is for to show the header because its hard to imitate the design of this project if there is no condition. 
                echo "<tr>";
                for ($x = 0; $x <= $col; $x++) { //The goal of this to print the row header or the table header
                    if ($x == 0) {
                        echo "<th> </th>";
                    } else {
                        echo "<th> Column $x </th>";
                    }
                }
                echo "</tr>";
            }
            echo "<tr>";
            for ($j = -1; $j < $col; $j++) { //This is for to display the columns in each row
                if ($j == -1) { //This statement is if variable $j is equal to -1 it will print the column row header such "Row #"
                    echo "<td class='rownum'> Row " . $count++ . "</td>";
                } else { //Else it will print all the columns
                    $array2D[$i][$j] = "x[$i][$j]";
                    echo "<td>" . $array2D[$i][$j] . "</td>";
                }
            }
            echo "</tr>";
        }
        echo "</table>";
    }
    ?>

    <!-- <table>
        <tr>
            <th> </th>
            <th> Column 1 </th>
            <th> Column 2 </th>
            <th> Column 3 </th>
            <th> Column 4 </th>
        </tr>
        <tr>
            <td> Row 1 </td>
            <td> 1 </td>
            <td> 2 </td>
            <td> 3 </td>
            <td> 4 </td>
        </tr>
        <tr>
            <td> Row 2 </td>
            <td> 5 </td>
            <td> 6 </td>
            <td> 7 </td>
            <td> 8 </td>
        </tr>
    </table> -->
</body>

</html>