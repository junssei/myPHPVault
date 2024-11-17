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
        
        select {
        -webkit-appearance:none;
        -moz-appearance:none;
        -ms-appearance:none;
        appearance:none;
        outline:0;
        box-shadow:none;
        border:0!important;
        background: #04AA6D;
        background-image: none;
        margin-right: 10px;
        padding: 0 .5em;
        color:#fff;
        cursor:pointer;
        font-size: 1em;
        font-family: 'Open Sans', sans-serif;
        width: 20em;
        }

        select::-ms-expand {
        display: none;
        }

        .select {
        position: relative;
        display: flex;
        height: 3em;
        line-height: 3;
        overflow: hidden;
        border-radius: .25em;
        margin-bottom: 32px;
        }
        /* .select::after {
        content: '\25BC';
        position: absolute;
        top: 0;
        right: 0;
        padding: 0 1em;
        background: #2b2e2e;
        cursor:pointer;
        pointer-events:none;
        transition:.25s all ease;
        } */
    </style>
</head>
<body>
    <form class="select">
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
                    // National Level
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
                
                    // Local Level
                    'Governor',
                    'Vice Governor',
                    'Board Member',
                    'Mayor',
                    'Vice Mayor',
                    'City Councilor',
                    'Barangay Captain',
                    'Barangay Councilor',
                
                    // Specialized Positions
                    'Chief of Police',
                    'Regional Director',
                    'Municipal Treasurer',
                    'Municipal Assessor',
                    'Provincial Engineer',
                    'Provincial Health Officer',
                    'Election Officer',
                    'Public Attorney',
                    'Prosecutor',
                    'Public School District Supervisor',
                
                    // Government-Owned or Controlled Corporations (GOCCs)
                    'Chairperson',
                    'President/CEO',
                    'Board Member',
                
                    // Civil Service
                    'Administrative Officer',
                    'Budget Officer',
                    'Human Resource Officer',
                    'Information Officer',
                    'Accountant',
                    'Auditor',
                    'Planning Officer',
                    'Legal Officer'
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