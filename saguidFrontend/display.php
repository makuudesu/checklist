<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "checklistt";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Fetch student information
$student_query = "SELECT * FROM students";
$student_result = mysqli_query($conn, $student_query);

// Fetch checklist of courses 1st year 1st Sem
$first = "SELECT course_code, course_title, credit_unit_lec,
                       credit_unit_lab, contact_hrs_lec, contact_hrs_lab, 
                       pre_requisite, sem_taken, year_taken,
                       final_grade, grade_description, grade_range, remarks, 
                       instructor_name, teaching_sem, teaching_year FROM subjects
                 JOIN grades ON subjects.grade_id = grades.grade_id
                 JOIN instructors ON subjects.instructor_id = instructors.instructor_id 
                 LIMIT 9";

$first_result = mysqli_query($conn, $first);

// Fetch checklist of courses 1st year 2nd Sem
$second = "SELECT course_code, course_title, credit_unit_lec,
                       credit_unit_lab, contact_hrs_lec, contact_hrs_lab, 
                       pre_requisite, sem_taken, year_taken,
                       final_grade, grade_description, grade_range, remarks, 
                       instructor_name, teaching_sem, teaching_year FROM subjects
                 JOIN grades ON subjects.grade_id = grades.grade_id
                 JOIN instructors ON subjects.instructor_id = instructors.instructor_id 
                 LIMIT 8 OFFSET 9";

$second_result = mysqli_query($conn, $second);

// Fetch checklist of courses 2nd year 1st Sem
$third = "SELECT course_code, course_title, credit_unit_lec,
                       credit_unit_lab, contact_hrs_lec, contact_hrs_lab, 
                       pre_requisite, sem_taken, year_taken,
                       final_grade, grade_description, grade_range, remarks, 
                       instructor_name, teaching_sem, teaching_year FROM subjects
                 JOIN grades ON subjects.grade_id = grades.grade_id
                 JOIN instructors ON subjects.instructor_id = instructors.instructor_id 
                 LIMIT 8 OFFSET 17";

$third_result = mysqli_query($conn, $third);

// Fetch checklist of courses 2nd year 2nd Sem
$fourth = "SELECT course_code, course_title, credit_unit_lec,
                       credit_unit_lab, contact_hrs_lec, contact_hrs_lab, 
                       pre_requisite, sem_taken, year_taken,
                       final_grade, grade_description, grade_range, remarks, 
                       instructor_name, teaching_sem, teaching_year FROM subjects
                 JOIN grades ON subjects.grade_id = grades.grade_id
                 JOIN instructors ON subjects.instructor_id = instructors.instructor_id 
                 LIMIT 8 OFFSET 25";

$fourth_result = mysqli_query($conn, $fourth);

// Fetch checklist of courses 3rd year 1st Sem
$fifth = "SELECT course_code, course_title, credit_unit_lec,
                       credit_unit_lab, contact_hrs_lec, contact_hrs_lab, 
                       pre_requisite, sem_taken, year_taken,
                       final_grade, grade_description, grade_range, remarks, 
                       instructor_name, teaching_sem, teaching_year FROM subjects
                 JOIN grades ON subjects.grade_id = grades.grade_id
                 JOIN instructors ON subjects.instructor_id = instructors.instructor_id 
                 LIMIT 7 OFFSET 33";

$fifth_result = mysqli_query($conn, $fifth);

// Fetch checklist of courses 3rd year 2nd Sem
$sixth = "SELECT course_code, course_title, credit_unit_lec,
                       credit_unit_lab, contact_hrs_lec, contact_hrs_lab, 
                       pre_requisite, sem_taken, year_taken,
                       final_grade, grade_description, grade_range, remarks, 
                       instructor_name, teaching_sem, teaching_year FROM subjects
                 JOIN grades ON subjects.grade_id = grades.grade_id
                 JOIN instructors ON subjects.instructor_id = instructors.instructor_id 
                 LIMIT 7 OFFSET 40";

$sixth_result = mysqli_query($conn, $sixth);

// Fetch checklist of courses Midyear
$seventh = "SELECT course_code, course_title, credit_unit_lec,
                       credit_unit_lab, contact_hrs_lec, contact_hrs_lab, 
                       pre_requisite, sem_taken, year_taken,
                       final_grade, grade_description, grade_range, remarks, 
                       instructor_name, teaching_sem, teaching_year FROM subjects
                 JOIN grades ON subjects.grade_id = grades.grade_id
                 JOIN instructors ON subjects.instructor_id = instructors.instructor_id 
                 LIMIT 1 OFFSET 47";

$seventh_result = mysqli_query($conn, $seventh);

// Fetch checklist of courses 4th year 1st Sem
$eighth = "SELECT course_code, course_title, credit_unit_lec,
                       credit_unit_lab, contact_hrs_lec, contact_hrs_lab, 
                       pre_requisite, sem_taken, year_taken,
                       final_grade, grade_description, grade_range, remarks, 
                       instructor_name, teaching_sem, teaching_year FROM subjects
                 JOIN grades ON subjects.grade_id = grades.grade_id
                 JOIN instructors ON subjects.instructor_id = instructors.instructor_id 
                 LIMIT 5 OFFSET 48";

$eighth_result = mysqli_query($conn, $eighth);

// Fetch checklist of courses 4th year 2nd Sem
$ninth = "SELECT course_code, course_title, credit_unit_lec,
                       credit_unit_lab, contact_hrs_lec, contact_hrs_lab, 
                       pre_requisite, sem_taken, year_taken,
                       final_grade, grade_description, grade_range, remarks, 
                       instructor_name, teaching_sem, teaching_year FROM subjects
                 JOIN grades ON subjects.grade_id = grades.grade_id
                 JOIN instructors ON subjects.instructor_id = instructors.instructor_id 
                 LIMIT 4 OFFSET 53";

$ninth_result = mysqli_query($conn, $ninth);


?>
