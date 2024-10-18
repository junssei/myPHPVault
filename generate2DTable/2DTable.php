<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> 2D Table </title>
    <style>
        * {
            font-size: 16px;
        }


        table {
            border: 1px solid black;
            margin-bottom: 12px;
        }

        td {
            padding: 32px;
        }

        tr {
            background-color: orange;
        }
    </style>
</head>

<body>
    <?php
    generateTable(3, 4);
    function generateTable($row, $col)
    {
        echo "<table>";
        for ($i = 0; $i < $row; $i++) {
            if ($i == 0) {
                for ($x = 0; $x <= $col; $x++) {
                    if ($x == 0) {
                        echo "<th> </th>";
                    } else {
                        echo "<th> Column $x </th>";
                    }
                }
            }
            echo "<tr>";
            for ($j = -1; $j < $col; $j++) {
                if ($j == -1) {
                    echo "<td> Row $i </td>";
                } else {
                    echo "<td> x[$i][$j] </td>";
                }
            }
            echo "</tr>";
        }
        echo "</table>";
    }

    generate2DTable(4, 6);
    function generate2DTable($row, $col)
    {
        echo "<table>";
        $array2D = [];
        for ($x = 0; $x < $row; $x++) {
            echo "<tr>";
            for ($y = 0; $y < $col; $y++) {
                $array2D[$x][$y] = "x[$x][$y]";
                echo "<td>" . $array2D[$x][$y] . "</td>";
            }
            echo "</tr>";
        }
        echo "</table>";
    }
    ?>


    <table>
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
    </table>
</body>

</html>