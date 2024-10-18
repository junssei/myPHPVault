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
            echo "<tr>";
            for ($j = 0; $j < $col; $j++) {
                echo "<td> x[$i][$j] </td>";
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
</body>

</html>