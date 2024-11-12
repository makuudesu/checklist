<?php
include_once 'display.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Checklist of Courses</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <header>
        <div class="logo">
            <img src="cvsu.png" alt="CVSU Logo">
        </div>
        <div class="header-text">
            <h2>Republic of the Philippines</h2>
            <h3>CAVITE STATE UNIVERSITY</h3>
            <h4>Bacoor City Campus</h4>
            <h3>Bachelor of Science in Computer Science</h3>
            <h5> (Program) </h5>
        </div>
        <div class="logo">
            <img src="logocs.png" alt="CS Logo">
        </div>
    </header>

    <div class="search-container">
        <form action="search.php" method="GET">
            <input type="text" placeholder="Search data here..." name="search">
            <button type="submit">Search</button>
        </form>
    </div>
    <div class="cctitle">
          <h1>Student Information</h1>
    </div>
    

    <div class="profile">
            <img class="pic" src="Saguid.jpg" alt="Student Picture">
        <div class="info">
             <?php while ($row = mysqli_fetch_assoc($student_result)): ?>
                 <p><span class="label">Name of Student:</span> <?php echo $row['first_name']; ?> <?php echo $row['last_name']; ?></p>
                 <p><span class="label">Student Number:</span> <?php echo $row['student_number']; ?></p>
                 <p><span class="label">Year Level:</span> <?php echo $row['year_level']; ?></p>
                 <p><span class="label">Address:</span> <?php echo $row['myAddress']; ?></p>
                 <p><span class="label">Contact Number:</span> <?php echo $row['contact_number']; ?></p>
                 <p><span class="label">Age:</span> <?php echo $row['age']; ?></p>
                 <p><span class="label">CVSU Email:</span> <?php echo $row['email']; ?></p>
                 <p><span class="label">Date of Admission:</span> <?php echo $row['admission_date']; ?></p>
        <?php endwhile; ?>
        </div>
    </div>

    <div class="cctitle">
        <h1>Checklist of Courses</h1>
    </div>
    <div class="checklist">

        <table id="courses-table">
            <tr>
                <th colspan="2" title="course_code">Course</th>
                <th colspan="2" title="credit_unit">Credit Unit</th>
                <th colspan="2" title="contact_hours">Contact Hours</th>
                <th rowspan="2" title="pre_requisite">Pre-Requisite</th>
                <th colspan="2" title="taken">Taken</th>
                <th colspan="4" title="grade">Grade</th>
                <th rowspan="2" title="instructor_name">Instructor Name</th>
                <th colspan="2" title="teaching">Teaching</th>
            </tr>
            
            <tr>
                <th title="course_code">Code</th>
                <th title="course_title">Title</th>
                <th title="credit_unit_lec">Lec</th>
                <th title="credit_unit_lab">Lab</th>
                <th title="contact_hrs_lec">Lec</th>
                <th title="contact_hrs_lab">Lab</th>
                <th title="sem_taken">Sem</th>
                <th title="year_taken">SY</th>
                <th title="final_grade">Final</th>
                <th title="grade_description">Description</th>
                <th title="grade_range">Range</th>
                <th title="remarks">Remarks</th>
                <th title="teaching_sem">Sem</th>
                <th title="teaching_year">SY</th>
            </tr>

            <tr><td colspan="16"></td></tr>
            <tr><th colspan="16">FIRST YEAR</th></tr>
            <tr><td colspan="16"></td>
            <tr><th colspan="2">First Semester</th></tr>
        
            <?php while ($row = mysqli_fetch_assoc($first_result)): ?>
                <tr>
                    <td><?php echo $row['course_code']; ?></td>
                    <td><?php echo $row['course_title']; ?></td>
                    <td><?php echo $row['credit_unit_lec']; ?></td>
                    <td <?php if (is_null($row['credit_unit_lab'])) echo 'class="red-bg"'; ?>>
                    <?php echo is_null($row['credit_unit_lab']) ? 'null' : $row['credit_unit_lab']; ?></td>
                    <td><?php echo $row['contact_hrs_lec']; ?></td>
                    <td <?php if (is_null($row['contact_hrs_lab'])) echo 'class="red-bg"'; ?>>
                    <?php echo is_null($row['contact_hrs_lab']) ? 'null' : $row['contact_hrs_lab']; ?></td>
                    <td <?php if (is_null($row['pre_requisite'])) echo 'class="red-bg"'; ?>>
                    <?php echo is_null($row['pre_requisite']) ? 'null' : $row['pre_requisite']; ?></td>
                    <td <?php if (is_null($row['sem_taken'])) echo 'class="red-bg"'; ?>>
                    <?php echo is_null($row['sem_taken']) ? 'null' : $row['sem_taken']; ?></td>
                    <td><?php echo $row['year_taken']; ?></td>
                    <td <?php if (is_null($row['final_grade'])) echo 'class="red-bg"'; ?>>
                    <?php echo is_null($row['final_grade']) ? 'null' : $row['final_grade']; ?></td>
                    <td <?php if (is_null($row['grade_description'])) echo 'class="red-bg"'; ?>>
                    <?php echo is_null($row['grade_description']) ? 'null' : $row['grade_description']; ?></td>
                    <td <?php if (is_null($row['grade_range'])) echo 'class="red-bg"'; ?>>
                    <?php echo is_null($row['grade_range']) ? 'null' : $row['grade_range']; ?></td>
                    <td <?php if (is_null($row['remarks'])) echo 'class="red-bg"'; ?>>
                    <?php echo is_null($row['remarks']) ? 'null' : $row['remarks']; ?></td>
                    <td <?php if (is_null($row['instructor_name'])) echo 'class="red-bg"'; ?>>
                    <?php echo is_null($row['instructor_name']) ? 'null' : $row['instructor_name']; ?></td>
                    <td <?php if (is_null($row['teaching_sem'])) echo 'class="red-bg"'; ?>>
                    <?php echo is_null($row['teaching_sem']) ? 'null' : $row['teaching_sem']; ?></td>
                    <td <?php if (is_null($row['teaching_year'])) echo 'class="red-bg"'; ?>>
                    <?php echo is_null($row['teaching_year']) ? 'null' : $row['teaching_year']; ?></td>
                </tr>
            <?php endwhile; ?>
            <tr>
                <th colspan="2">Sub-total</th>
                <td>20</td>
                <td>3</td>
                <td>21</td>
                <td>9</td>
                <td></td>
                <th colspan="9">Adviser:___________________________________________</th>
            </tr>
            <tr><td colspan="16"></td></tr>
            <tr><th colspan="2">Second Semester</th></tr>
            <?php while ($row = mysqli_fetch_assoc($second_result)): ?>
                <tr>
                    <td><?php echo $row['course_code']; ?></td>
                    <td><?php echo $row['course_title']; ?></td>
                    <td><?php echo $row['credit_unit_lec']; ?></td>
                    <td <?php if (is_null($row['credit_unit_lab'])) echo 'class="red-bg"'; ?>>
                    <?php echo is_null($row['credit_unit_lab']) ? 'null' : $row['credit_unit_lab']; ?></td>
                    <td><?php echo $row['contact_hrs_lec']; ?></td>
                    <td <?php if (is_null($row['contact_hrs_lab'])) echo 'class="red-bg"'; ?>>
                    <?php echo is_null($row['contact_hrs_lab']) ? 'null' : $row['contact_hrs_lab']; ?></td>
                    <td <?php if (is_null($row['pre_requisite'])) echo 'class="red-bg"'; ?>>
                    <?php echo is_null($row['pre_requisite']) ? 'null' : $row['pre_requisite']; ?></td>
                    <td <?php if (is_null($row['sem_taken'])) echo 'class="red-bg"'; ?>>
                    <?php echo is_null($row['sem_taken']) ? 'null' : $row['sem_taken']; ?></td>
                    <td><?php echo $row['year_taken']; ?></td>
                    <td <?php if (is_null($row['final_grade'])) echo 'class="red-bg"'; ?>>
                    <?php echo is_null($row['final_grade']) ? 'null' : $row['final_grade']; ?></td>
                    <td <?php if (is_null($row['grade_description'])) echo 'class="red-bg"'; ?>>
                    <?php echo is_null($row['grade_description']) ? 'null' : $row['grade_description']; ?></td>
                    <td <?php if (is_null($row['grade_range'])) echo 'class="red-bg"'; ?>>
                    <?php echo is_null($row['grade_range']) ? 'null' : $row['grade_range']; ?></td>
                    <td <?php if (is_null($row['remarks'])) echo 'class="red-bg"'; ?>>
                    <?php echo is_null($row['remarks']) ? 'null' : $row['remarks']; ?></td>
                    <td <?php if (is_null($row['instructor_name'])) echo 'class="red-bg"'; ?>>
                    <?php echo is_null($row['instructor_name']) ? 'null' : $row['instructor_name']; ?></td>
                    <td <?php if (is_null($row['teaching_sem'])) echo 'class="red-bg"'; ?>>
                    <?php echo is_null($row['teaching_sem']) ? 'null' : $row['teaching_sem']; ?></td>
                    <td <?php if (is_null($row['teaching_year'])) echo 'class="red-bg"'; ?>>
                    <?php echo is_null($row['teaching_year']) ? 'null' : $row['teaching_year']; ?></td>
                </tr>
            <?php endwhile; ?>
            <tr>
                <th colspan="2">Sub-total</th>
                <td>20</td>
                <td>3</td>
                <td>20</td>
                <td>9</td>
                <td></td>
                <th colspan="9">Adviser:___________________________________________</th>
            </tr>
            <tr><td colspan="16"></td></tr>
            <tr><th colspan="16">SECOND YEAR</th></tr>
            <tr><td colspan="16"></td></tr>
            <tr><th colspan="2">First Semester</th></tr>
            <tr><td colspan="16"></td></tr>
            <?php while ($row = mysqli_fetch_assoc($third_result)): ?>
                <tr>
                    <td><?php echo $row['course_code']; ?></td>
                    <td><?php echo $row['course_title']; ?></td>
                    <td><?php echo $row['credit_unit_lec']; ?></td>
                    <td <?php if (is_null($row['credit_unit_lab'])) echo 'class="red-bg"'; ?>>
                    <?php echo is_null($row['credit_unit_lab']) ? 'null' : $row['credit_unit_lab']; ?></td>
                    <td><?php echo $row['contact_hrs_lec']; ?></td>
                    <td <?php if (is_null($row['contact_hrs_lab'])) echo 'class="red-bg"'; ?>>
                    <?php echo is_null($row['contact_hrs_lab']) ? 'null' : $row['contact_hrs_lab']; ?></td>
                    <td <?php if (is_null($row['pre_requisite'])) echo 'class="red-bg"'; ?>>
                    <?php echo is_null($row['pre_requisite']) ? 'null' : $row['pre_requisite']; ?></td>
                    <td <?php if (is_null($row['sem_taken'])) echo 'class="red-bg"'; ?>>
                    <?php echo is_null($row['sem_taken']) ? 'null' : $row['sem_taken']; ?></td>
                    <td><?php echo $row['year_taken']; ?></td>
                    <td <?php if (is_null($row['final_grade'])) echo 'class="red-bg"'; ?>>
                    <?php echo is_null($row['final_grade']) ? 'null' : $row['final_grade']; ?></td>
                    <td <?php if (is_null($row['grade_description'])) echo 'class="red-bg"'; ?>>
                    <?php echo is_null($row['grade_description']) ? 'null' : $row['grade_description']; ?></td>
                    <td <?php if (is_null($row['grade_range'])) echo 'class="red-bg"'; ?>>
                    <?php echo is_null($row['grade_range']) ? 'null' : $row['grade_range']; ?></td>
                    <td <?php if (is_null($row['remarks'])) echo 'class="red-bg"'; ?>>
                    <?php echo is_null($row['remarks']) ? 'null' : $row['remarks']; ?></td>
                    <td <?php if (is_null($row['instructor_name'])) echo 'class="red-bg"'; ?>>
                    <?php echo is_null($row['instructor_name']) ? 'null' : $row['instructor_name']; ?></td>
                    <td <?php if (is_null($row['teaching_sem'])) echo 'class="red-bg"'; ?>>
                    <?php echo is_null($row['teaching_sem']) ? 'null' : $row['teaching_sem']; ?></td>
                    <td <?php if (is_null($row['teaching_year'])) echo 'class="red-bg"'; ?>>
                    <?php echo is_null($row['teaching_year']) ? 'null' : $row['teaching_year']; ?></td>
                </tr>
            <?php endwhile; ?>
            <tr>
                <th colspan="2">Sub-total</th>
                <td>20</td>
                <td>3</td>
                <td>20</td>
                <td>9</td>
                <td></td>
                <th colspan="9">Adviser:___________________________________________</th>
            </tr>
            <tr><td colspan="16"></td></tr>
            <tr><th colspan="2">Second Semester</th></tr>
            <tr><td colspan="16"></td></tr>
            <?php while ($row = mysqli_fetch_assoc($fourth_result)): ?>
                <tr>
                    <td><?php echo $row['course_code']; ?></td>
                    <td><?php echo $row['course_title']; ?></td>
                    <td><?php echo $row['credit_unit_lec']; ?></td>
                    <td <?php if (is_null($row['credit_unit_lab'])) echo 'class="red-bg"'; ?>>
                    <?php echo is_null($row['credit_unit_lab']) ? 'null' : $row['credit_unit_lab']; ?></td>
                    <td><?php echo $row['contact_hrs_lec']; ?></td>
                    <td <?php if (is_null($row['contact_hrs_lab'])) echo 'class="red-bg"'; ?>>
                    <?php echo is_null($row['contact_hrs_lab']) ? 'null' : $row['contact_hrs_lab']; ?></td>
                    <td <?php if (is_null($row['pre_requisite'])) echo 'class="red-bg"'; ?>>
                    <?php echo is_null($row['pre_requisite']) ? 'null' : $row['pre_requisite']; ?></td>
                    <td <?php if (is_null($row['sem_taken'])) echo 'class="red-bg"'; ?>>
                    <?php echo is_null($row['sem_taken']) ? 'null' : $row['sem_taken']; ?></td>
                    <td><?php echo $row['year_taken']; ?></td>
                    <td <?php if (is_null($row['final_grade'])) echo 'class="red-bg"'; ?>>
                    <?php echo is_null($row['final_grade']) ? 'null' : $row['final_grade']; ?></td>
                    <td <?php if (is_null($row['grade_description'])) echo 'class="red-bg"'; ?>>
                    <?php echo is_null($row['grade_description']) ? 'null' : $row['grade_description']; ?></td>
                    <td <?php if (is_null($row['grade_range'])) echo 'class="red-bg"'; ?>>
                    <?php echo is_null($row['grade_range']) ? 'null' : $row['grade_range']; ?></td>
                    <td <?php if (is_null($row['remarks'])) echo 'class="red-bg"'; ?>>
                    <?php echo is_null($row['remarks']) ? 'null' : $row['remarks']; ?></td>
                    <td <?php if (is_null($row['instructor_name'])) echo 'class="red-bg"'; ?>>
                    <?php echo is_null($row['instructor_name']) ? 'null' : $row['instructor_name']; ?></td>
                    <td <?php if (is_null($row['teaching_sem'])) echo 'class="red-bg"'; ?>>
                    <?php echo is_null($row['teaching_sem']) ? 'null' : $row['teaching_sem']; ?></td>
                    <td <?php if (is_null($row['teaching_year'])) echo 'class="red-bg"'; ?>>
                    <?php echo is_null($row['teaching_year']) ? 'null' : $row['teaching_year']; ?></td>
                </tr>
            <?php endwhile; ?>
            <tr>
                <th colspan="2">Sub-total</th>
                <td>20</td>
                <td>3</td>
                <td>20</td>
                <td>9</td>
                <td></td>
                <th colspan="9">Adviser:___________________________________________</th>
            </tr>
            <tr><td colspan="16"></td></tr>
            <tr><th colspan="16">THIRD YEAR</th></tr>
            <tr><td colspan="16"></td></tr>
            <tr><th colspan="2">First Semester</th></tr>
            <tr><td colspan="16"></td></tr>
            <?php while ($row = mysqli_fetch_assoc($fifth_result)): ?>
                <tr>
                    <td><?php echo $row['course_code']; ?></td>
                    <td><?php echo $row['course_title']; ?></td>
                    <td><?php echo $row['credit_unit_lec']; ?></td>
                    <td <?php if (is_null($row['credit_unit_lab'])) echo 'class="red-bg"'; ?>>
                    <?php echo is_null($row['credit_unit_lab']) ? 'null' : $row['credit_unit_lab']; ?></td>
                    <td><?php echo $row['contact_hrs_lec']; ?></td>
                    <td <?php if (is_null($row['contact_hrs_lab'])) echo 'class="red-bg"'; ?>>
                    <?php echo is_null($row['contact_hrs_lab']) ? 'null' : $row['contact_hrs_lab']; ?></td>
                    <td <?php if (is_null($row['pre_requisite'])) echo 'class="red-bg"'; ?>>
                    <?php echo is_null($row['pre_requisite']) ? 'null' : $row['pre_requisite']; ?></td>
                    <td <?php if (is_null($row['sem_taken'])) echo 'class="red-bg"'; ?>>
                    <?php echo is_null($row['sem_taken']) ? 'null' : $row['sem_taken']; ?></td>
                    <td><?php echo $row['year_taken']; ?></td>
                    <td <?php if (is_null($row['final_grade'])) echo 'class="red-bg"'; ?>>
                    <?php echo is_null($row['final_grade']) ? 'null' : $row['final_grade']; ?></td>
                    <td <?php if (is_null($row['grade_description'])) echo 'class="red-bg"'; ?>>
                    <?php echo is_null($row['grade_description']) ? 'null' : $row['grade_description']; ?></td>
                    <td <?php if (is_null($row['grade_range'])) echo 'class="red-bg"'; ?>>
                    <?php echo is_null($row['grade_range']) ? 'null' : $row['grade_range']; ?></td>
                    <td <?php if (is_null($row['remarks'])) echo 'class="red-bg"'; ?>>
                    <?php echo is_null($row['remarks']) ? 'null' : $row['remarks']; ?></td>
                    <td <?php if (is_null($row['instructor_name'])) echo 'class="red-bg"'; ?>>
                    <?php echo is_null($row['instructor_name']) ? 'null' : $row['instructor_name']; ?></td>
                    <td <?php if (is_null($row['teaching_sem'])) echo 'class="red-bg"'; ?>>
                    <?php echo is_null($row['teaching_sem']) ? 'null' : $row['teaching_sem']; ?></td>
                    <td <?php if (is_null($row['teaching_year'])) echo 'class="red-bg"'; ?>>
                    <?php echo is_null($row['teaching_year']) ? 'null' : $row['teaching_year']; ?></td>
                </tr>
            <?php endwhile; ?>
            <tr>
                <th colspan="2">Sub-total</th>
                <td>16</td>
                <td>5</td>
                <td>16</td>
                <td>15</td>
                <td></td>
                <th colspan="9">Adviser:___________________________________________</th>
            </tr>
            <tr><td colspan="16"></td></tr>
            <tr><th colspan="2">Second Semester</th></tr>
            <tr><td colspan="16"></td></tr>
            <?php while ($row = mysqli_fetch_assoc($sixth_result)): ?>
                <tr>
                    <td><?php echo $row['course_code']; ?></td>
                    <td><?php echo $row['course_title']; ?></td>
                    <td><?php echo $row['credit_unit_lec']; ?></td>
                    <td <?php if (is_null($row['credit_unit_lab'])) echo 'class="red-bg"'; ?>>
                    <?php echo is_null($row['credit_unit_lab']) ? 'null' : $row['credit_unit_lab']; ?></td>
                    <td><?php echo $row['contact_hrs_lec']; ?></td>
                    <td <?php if (is_null($row['contact_hrs_lab'])) echo 'class="red-bg"'; ?>>
                    <?php echo is_null($row['contact_hrs_lab']) ? 'null' : $row['contact_hrs_lab']; ?></td>
                    <td <?php if (is_null($row['pre_requisite'])) echo 'class="red-bg"'; ?>>
                    <?php echo is_null($row['pre_requisite']) ? 'null' : $row['pre_requisite']; ?></td>
                    <td <?php if (is_null($row['sem_taken'])) echo 'class="red-bg"'; ?>>
                    <?php echo is_null($row['sem_taken']) ? 'null' : $row['sem_taken']; ?></td>
                    <td><?php echo $row['year_taken']; ?></td>
                    <td <?php if (is_null($row['final_grade'])) echo 'class="red-bg"'; ?>>
                    <?php echo is_null($row['final_grade']) ? 'null' : $row['final_grade']; ?></td>
                    <td <?php if (is_null($row['grade_description'])) echo 'class="red-bg"'; ?>>
                    <?php echo is_null($row['grade_description']) ? 'null' : $row['grade_description']; ?></td>
                    <td <?php if (is_null($row['grade_range'])) echo 'class="red-bg"'; ?>>
                    <?php echo is_null($row['grade_range']) ? 'null' : $row['grade_range']; ?></td>
                    <td <?php if (is_null($row['remarks'])) echo 'class="red-bg"'; ?>>
                    <?php echo is_null($row['remarks']) ? 'null' : $row['remarks']; ?></td>
                    <td <?php if (is_null($row['instructor_name'])) echo 'class="red-bg"'; ?>>
                    <?php echo is_null($row['instructor_name']) ? 'null' : $row['instructor_name']; ?></td>
                    <td <?php if (is_null($row['teaching_sem'])) echo 'class="red-bg"'; ?>>
                    <?php echo is_null($row['teaching_sem']) ? 'null' : $row['teaching_sem']; ?></td>
                    <td <?php if (is_null($row['teaching_year'])) echo 'class="red-bg"'; ?>>
                    <?php echo is_null($row['teaching_year']) ? 'null' : $row['teaching_year']; ?></td>
                </tr>
            <?php endwhile; ?>
            <tr>
                <th colspan="2">Sub-total</th>
                <td>19</td>
                <td>2</td>
                <td>19</td>
                <td>6</td>
                <td></td>
                <th colspan="9">Adviser:___________________________________________</th>
            </tr>
            <tr><td colspan="16"></td></tr>
            <tr><th colspan="16">MIDYEAR</th></tr>
            <tr><td colspan="16"></td></tr>
            <?php while ($row = mysqli_fetch_assoc($seventh_result)): ?>
                <tr>
                    <td><?php echo $row['course_code']; ?></td>
                    <td><?php echo $row['course_title']; ?></td>
                    <td><?php echo $row['credit_unit_lec']; ?></td>
                    <td <?php if (is_null($row['credit_unit_lab'])) echo 'class="red-bg"'; ?>>
                    <?php echo is_null($row['credit_unit_lab']) ? 'null' : $row['credit_unit_lab']; ?></td>
                    <td><?php echo $row['contact_hrs_lec']; ?></td>
                    <td <?php if (is_null($row['contact_hrs_lab'])) echo 'class="red-bg"'; ?>>
                    <?php echo is_null($row['contact_hrs_lab']) ? 'null' : $row['contact_hrs_lab']; ?></td>
                    <td <?php if (is_null($row['pre_requisite'])) echo 'class="red-bg"'; ?>>
                    <?php echo is_null($row['pre_requisite']) ? 'null' : $row['pre_requisite']; ?></td>
                    <td <?php if (is_null($row['sem_taken'])) echo 'class="red-bg"'; ?>>
                    <?php echo is_null($row['sem_taken']) ? 'null' : $row['sem_taken']; ?></td>
                    <td><?php echo $row['year_taken']; ?></td>
                    <td <?php if (is_null($row['final_grade'])) echo 'class="red-bg"'; ?>>
                    <?php echo is_null($row['final_grade']) ? 'null' : $row['final_grade']; ?></td>
                    <td <?php if (is_null($row['grade_description'])) echo 'class="red-bg"'; ?>>
                    <?php echo is_null($row['grade_description']) ? 'null' : $row['grade_description']; ?></td>
                    <td <?php if (is_null($row['grade_range'])) echo 'class="red-bg"'; ?>>
                    <?php echo is_null($row['grade_range']) ? 'null' : $row['grade_range']; ?></td>
                    <td <?php if (is_null($row['remarks'])) echo 'class="red-bg"'; ?>>
                    <?php echo is_null($row['remarks']) ? 'null' : $row['remarks']; ?></td>
                    <td <?php if (is_null($row['instructor_name'])) echo 'class="red-bg"'; ?>>
                    <?php echo is_null($row['instructor_name']) ? 'null' : $row['instructor_name']; ?></td>
                    <td <?php if (is_null($row['teaching_sem'])) echo 'class="red-bg"'; ?>>
                    <?php echo is_null($row['teaching_sem']) ? 'null' : $row['teaching_sem']; ?></td>
                    <td <?php if (is_null($row['teaching_year'])) echo 'class="red-bg"'; ?>>
                    <?php echo is_null($row['teaching_year']) ? 'null' : $row['teaching_year']; ?></td>
                </tr>
            <?php endwhile; ?>
            <tr>
                <th colspan="2">Sub-total</th>
                <td>3</td>
                <td>0</td>
                <td>3</td>
                <td>0</td>
                <td></td>
                <th colspan="9">Adviser:___________________________________________</th>
            </tr>
            <tr><td colspan="16"></td></tr>
            <tr><th colspan="16">FOURTH YEAR</th></tr>
            <tr><td colspan="16"></td></tr>
            <tr><th colspan="2">First Semester</th></tr>
            <tr><td colspan="16"></td></tr>
            <?php while ($row = mysqli_fetch_assoc($eighth_result)): ?>
                <tr>
                    <td><?php echo $row['course_code']; ?></td>
                    <td><?php echo $row['course_title']; ?></td>
                    <td><?php echo $row['credit_unit_lec']; ?></td>
                    <td <?php if (is_null($row['credit_unit_lab'])) echo 'class="red-bg"'; ?>>
                    <?php echo is_null($row['credit_unit_lab']) ? 'null' : $row['credit_unit_lab']; ?></td>
                    <td><?php echo $row['contact_hrs_lec']; ?></td>
                    <td <?php if (is_null($row['contact_hrs_lab'])) echo 'class="red-bg"'; ?>>
                    <?php echo is_null($row['contact_hrs_lab']) ? 'null' : $row['contact_hrs_lab']; ?></td>
                    <td <?php if (is_null($row['pre_requisite'])) echo 'class="red-bg"'; ?>>
                    <?php echo is_null($row['pre_requisite']) ? 'null' : $row['pre_requisite']; ?></td>
                    <td <?php if (is_null($row['sem_taken'])) echo 'class="red-bg"'; ?>>
                    <?php echo is_null($row['sem_taken']) ? 'null' : $row['sem_taken']; ?></td>
                    <td><?php echo $row['year_taken']; ?></td>
                    <td <?php if (is_null($row['final_grade'])) echo 'class="red-bg"'; ?>>
                    <?php echo is_null($row['final_grade']) ? 'null' : $row['final_grade']; ?></td>
                    <td <?php if (is_null($row['grade_description'])) echo 'class="red-bg"'; ?>>
                    <?php echo is_null($row['grade_description']) ? 'null' : $row['grade_description']; ?></td>
                    <td <?php if (is_null($row['grade_range'])) echo 'class="red-bg"'; ?>>
                    <?php echo is_null($row['grade_range']) ? 'null' : $row['grade_range']; ?></td>
                    <td <?php if (is_null($row['remarks'])) echo 'class="red-bg"'; ?>>
                    <?php echo is_null($row['remarks']) ? 'null' : $row['remarks']; ?></td>
                    <td <?php if (is_null($row['instructor_name'])) echo 'class="red-bg"'; ?>>
                    <?php echo is_null($row['instructor_name']) ? 'null' : $row['instructor_name']; ?></td>
                    <td <?php if (is_null($row['teaching_sem'])) echo 'class="red-bg"'; ?>>
                    <?php echo is_null($row['teaching_sem']) ? 'null' : $row['teaching_sem']; ?></td>
                    <td <?php if (is_null($row['teaching_year'])) echo 'class="red-bg"'; ?>>
                    <?php echo is_null($row['teaching_year']) ? 'null' : $row['teaching_year']; ?></td>
                </tr>
            <?php endwhile; ?>
            <tr>
                <th colspan="2">Sub-total</th>
                <td>11</td>
                <td>2</td>
                <td>11</td>
                <td>6</td>
                <td></td>
                <th colspan="9">Adviser:___________________________________________</th>
            </tr>
            <tr><td colspan="16"></td></tr>
            <tr><th colspan="2">Second Semester</th></tr>
            <tr><td colspan="16"></td></tr>
            <?php while ($row = mysqli_fetch_assoc($ninth_result)): ?>
                <tr>
                    <td><?php echo $row['course_code']; ?></td>
                    <td><?php echo $row['course_title']; ?></td>
                    <td><?php echo $row['credit_unit_lec']; ?></td>
                    <td <?php if (is_null($row['credit_unit_lab'])) echo 'class="red-bg"'; ?>>
                    <?php echo is_null($row['credit_unit_lab']) ? 'null' : $row['credit_unit_lab']; ?></td>
                    <td><?php echo $row['contact_hrs_lec']; ?></td>
                    <td <?php if (is_null($row['contact_hrs_lab'])) echo 'class="red-bg"'; ?>>
                    <?php echo is_null($row['contact_hrs_lab']) ? 'null' : $row['contact_hrs_lab']; ?></td>
                    <td <?php if (is_null($row['pre_requisite'])) echo 'class="red-bg"'; ?>>
                    <?php echo is_null($row['pre_requisite']) ? 'null' : $row['pre_requisite']; ?></td>
                    <td <?php if (is_null($row['sem_taken'])) echo 'class="red-bg"'; ?>>
                    <?php echo is_null($row['sem_taken']) ? 'null' : $row['sem_taken']; ?></td>
                    <td><?php echo $row['year_taken']; ?></td>
                    <td <?php if (is_null($row['final_grade'])) echo 'class="red-bg"'; ?>>
                    <?php echo is_null($row['final_grade']) ? 'null' : $row['final_grade']; ?></td>
                    <td <?php if (is_null($row['grade_description'])) echo 'class="red-bg"'; ?>>
                    <?php echo is_null($row['grade_description']) ? 'null' : $row['grade_description']; ?></td>
                    <td <?php if (is_null($row['grade_range'])) echo 'class="red-bg"'; ?>>
                    <?php echo is_null($row['grade_range']) ? 'null' : $row['grade_range']; ?></td>
                    <td <?php if (is_null($row['remarks'])) echo 'class="red-bg"'; ?>>
                    <?php echo is_null($row['remarks']) ? 'null' : $row['remarks']; ?></td>
                    <td <?php if (is_null($row['instructor_name'])) echo 'class="red-bg"'; ?>>
                    <?php echo is_null($row['instructor_name']) ? 'null' : $row['instructor_name']; ?></td>
                    <td <?php if (is_null($row['teaching_sem'])) echo 'class="red-bg"'; ?>>
                    <?php echo is_null($row['teaching_sem']) ? 'null' : $row['teaching_sem']; ?></td>
                    <td <?php if (is_null($row['teaching_year'])) echo 'class="red-bg"'; ?>>
                    <?php echo is_null($row['teaching_year']) ? 'null' : $row['teaching_year']; ?></td>
                </tr>
            <?php endwhile; ?>
            <tr>
                <th colspan="2">Sub-total</th>
                <td>11</td>
                <td>1</td>
                <td>9</td>
                <td>3</td>
                <td></td>
                <td colspan="9"></td>
            </tr>
            <tr>
                <th colspan="2">Grand-total</th>
                <td>162</td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <th colspan="9">Adviser:___________________________________________</th>
            </tr>
        </table>
    </div>
</body>

</html>