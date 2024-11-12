<?php

include_once 'display.php';

error_reporting(E_ALL);
ini_set('display_errors', 1);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Search Data</title>
    <link rel="stylesheet" href="style.css">
</head>

<body style="background-image: url(bodybg.jpg);
        background-size: 100% 100%;
        background-repeat: no-repeat;
        height: 1500px;
        width: 100%;
        margin: 0;">
    <div class="buttonn">
        <button onclick="goBack()">BACK</button> 
    </div>
    <div>
    <table class="search-table">
                            
        <?php
        if (isset($_GET['search']) && !empty($_GET['search'])) {
            $search = $_GET['search'];

            $search_sql = "SELECT * FROM subjects JOIN grades ON subjects.grade_id= grades.grade_id
    JOIN instructors ON subjects.instructor_id= instructors.instructor_id 
    WHERE course_code LIKE '%$search%' OR course_title LIKE '%$search%' OR credit_unit_lec LIKE '%$search%' OR credit_unit_lab LIKE '%$search%'
    OR contact_hrs_lec LIKE '%$search%' OR contact_hrs_lab LIKE '%$search%' OR sem_taken LIKE '%$search%'
    OR year_taken LIKE '%$search%' OR final_grade LIKE '%$search%' OR grade_description LIKE '%$search%'
    OR grade_range LIKE '%$search%' OR remarks LIKE '%$search%' OR instructor_name LIKE '%$search%'
    OR teaching_sem LIKE '%$search%' OR teaching_year LIKE '%$search%'";
            $result = mysqli_query($conn, $search_sql);

            if ($result && mysqli_num_rows($result) > 0) {
                echo '<table class="search-table">';
                echo '<thead>
                    <tr><th colspan="16">SEARCH RESULTS</th></tr>
            <tr>
            <th colspan="2">Course</th>
            <th colspan="2">Credit Unit</th>
            <th colspan="2">Contact Hours</th>
            <th rowspan="2">Pre-Requisite</th>
            <th colspan="2">Taken</th>
            <th colspan="4">Grade</th>
            <th rowspan="2">Instructor Name</th>
            <th colspan="2">Teaching</th>
        </tr>
        <tr>
            <th>Code</th>
            <th>Title</th>
            <th>Lec</th>
            <th>Lab</th>
            <th>Lec</th>
            <th>Lab</th>
            <th>Sem</th>
            <th>SY</th>
            <th>Final</th>
            <th>Description</th>
            <th>Range</th>
            <th>Remarks</th>
            <th>Sem</th>
            <th>SY</th>
        </tr>
        </thead>';
                    while ($row = mysqli_fetch_assoc($result)) {
                        echo '<tbody>
            <tr>
    <td>' . $row['course_code'] . '</td>
    <td>' . $row['course_title'] . '</td>
    <td>' . $row['credit_unit_lec'] . '</td>
    <td>' . $row['credit_unit_lab'] . '</td>
    <td>' . $row['contact_hrs_lec'] . '</td>
    <td>' . $row['contact_hrs_lab'] . '</td>
    <td>' . $row['pre_requisite'] . '</td>
    <td>' . $row['sem_taken'] . '</td>
    <td>' . $row['year_taken'] . '</td>
    <td>' . $row['final_grade'] . '</td>
    <td>' . $row['grade_description'] . '</td>
    <td>' . $row['grade_range'] . '</td>
    <td>' . $row['remarks'] . '</td>
    <td>' . $row['instructor_name'] . '</td>
    <td>' . $row['teaching_sem'] . '</td>
    <td>' . $row['teaching_year'] . '</td>
</tr>
</tbody>';
                    }
                    echo '</table>';
                } else {
                    echo '<div class="none">No results found.</div>';
                }
            } else{
                echo '<div class="none">Search field cannot be empty.<br>Please enter data to search.</div>';
            }
        ?>
        </table>

    </div>
    <script>
        function goBack(){
            window.history.back();
        }
    </script>
</body>

</html>