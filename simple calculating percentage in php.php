
<?php
$subjectMarks = [80, 75, 90, 85, 78, 82];
$maxMarks = 100; 
function calculatePercentage($marks, $maxMarks) {
    $totalMarks = array_sum($marks);
    $totalMaxMarks = $maxMarks * count($marks);
    $percentage = ($totalMarks / $totalMaxMarks) * 100;
    return $percentage;
}
$percentage = calculatePercentage($subjectMarks, $maxMarks);
echo "The percentage for the six subjects is: " . number_format($percentage, 2) . "%";
?>

