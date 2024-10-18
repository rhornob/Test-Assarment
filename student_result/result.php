<?php
function calculateResult($marks) {
    $totalMarks = 0;
    $subjectCount = count($marks);

    
    foreach ($marks as $mark) {
        if ($mark < 0 || $mark > 100) {
            echo "Mark range is invalid.\n";
            return;
        }
    }


    foreach ($marks as $mark) {
        if ($mark < 33) {
            echo "Student has failed.\n";
            return;
        }
    }


    $totalMarks = array_sum($marks); 
    $averageMarks = $totalMarks / $subjectCount; 

    
    switch (true) {
        case ($averageMarks >= 80 && $averageMarks <= 100):
            $grade = 'A+';
            break;
        case ($averageMarks >= 70 && $averageMarks <= 79):
            $grade = 'A';
            break;
        case ($averageMarks >= 60 && $averageMarks <= 69):
            $grade = 'A-';
            break;
        case ($averageMarks >= 50 && $averageMarks <= 59):
            $grade = 'B';
            break;
        case ($averageMarks >= 40 && $averageMarks <= 49):
            $grade = 'C';
            break;
        case ($averageMarks >= 33 && $averageMarks <= 39):
            $grade = 'D';
            break;
        default:
            $grade = 'F';
            break;
    }

    // Output result
    echo "Total Marks: " . $totalMarks . "\n";
    echo "Average Marks: " . number_format($averageMarks, 2) . "\n";
    echo "Grade: " . $grade . "\n";
}

// Example marks
$marks = [100, 80, 95, 80, 80]; 

calculateResult($marks);


?>
