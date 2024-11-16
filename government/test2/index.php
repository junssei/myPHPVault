<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Philippines Government Official </title>
    <style>
        table {
            font-family: Arial, Helvetica, sans-serif;
            border-collapse: collapse;
            width: 50%;
        }

        table td, table th {
            border: 1px solid #ddd;
            padding: 8px;
        }

        table tr:nth-child(even){background-color: #f2f2f2;}

        table tr:hover {background-color: #ddd;}

        table th {
            padding-top: 12px;
            padding-bottom: 12px;
            text-align: left;
            background-color: #04AA6D;
            color: white;
        }
    </style>
</head>
<body>
    <form>
        <select id="slctGrade" name="salary_grade" onchange="showUser()">
            <option value="">Select salary grade:</option>
            <?php
                for($i = 1; $i <= 33; $i++){
                    echo "<option value='". $i . "'>" . $i . "</option>";
                }
            ?>
        </select>
        <select id="slctPosition" name="position" onchange="showUser()">
            <option value="">Select position:</option>
            <?php
                $position = array(
                    'President',
                    'Vice President',
                    'Senator',
                    'Congressman/Congresswoman',
                    'Cabinet Secretary',
                    'Undersecretary',
                    'Assistant Secretary',
                    'Commissioner',
                    'Director General',
                    'Ambassador',
                    'Solicitor General',
                    'Chief Justice',
                    'Associate Justice',
                    'Ombudsman',
                    'Deputy Ombudsman',
                    'Governor',
                    'Vice Governor',
                    'Board Member',
                    'Mayor',
                    'Vice Mayor',
                    'City Councilor',
                    'Barangay Captain',
                    'Barangay Councilor'
                );

                for($i = 0; $i < count($position); $i++){
                    echo "<option value='". $position[$i] . "'>" . $position[$i] . "</option>";
                }
            ?>
        </select>
    </form>
    <div id="txtHint"><b>Person info will be listed here...</b></div>
    <script>
        function showUser() {
            const grade = document.getElementById("slctGrade").value;
            const pos = document.getElementById("slctPosition").value;
            
            if (grade === "" && pos === "") {
                document.getElementById("txtHint").innerHTML = "";
                return;
            } else {
                var xmlhttp = new XMLHttpRequest();
                xmlhttp.onreadystatechange = function() {
                    if (this.readyState == 4 && this.status == 200) {
                        document.getElementById("txtHint").innerHTML = this.responseText;
                    }
                };
                xmlhttp.open("GET","officials.php?q=" + pos + "&g=" + grade,true);
                xmlhttp.send();
            }
        }
    </script>
</body>
</html>