<?php
$student_name = 'Nguyễn Văn Thành An';
$test_scores = array(70, 67, 94, 48, 72);

$sum = array_sum($test_scores);
$average = $sum / count($test_scores);

if ($average >= 85) {
    $grade = 'A';
} else {
    if ($average >= 70) {
        $grade = 'B';
    } else {
        if ($average >= 60) {
            $grade = 'C';
        } else {
            if ($average >= 50) {
                $grade = 'D';
            } else {
                $grade = 'F';
            }
        }
    }
}

echo "Sinh viên $student_name có điểm trung bình là $average và được xếp loại học lực $grade.";
