<?php
function studentMark($physic = 45, $chemistry = 56, $gMath = 95, $biology = 45, $ict = 33)
{
  $totalMark = $physic + $chemistry + $gMath + $biology + $ict;
  $averageMark = $totalMark / 5;
  if (
    ($physic < 0 && $physic > 100) or
    ($chemistry < 0 && $chemistry > 100) or
    ($gMath < 0 && $gMath > 100) or
    ($biology < 0 && $biology > 100) or
    ($ict < 0 && $ict > 100)
  ) {
    echo "Mark range is Invalid";
  } elseif ($physic < 33 or $chemistry < 33 or $gMath < 33 or $biology < 33 or $ict < 33) {
    echo "You have failed the exam";
  } else {
    $studentGrade = "";

    switch ($averageMark) {
      case ($averageMark >= 80 && $averageMark <= 100):
        $studentGrade = 'Grade: A+';
        break;
      case ($averageMark >= 70 && $averageMark < 80):
        $studentGrade = 'Grade: A';
        break;
      case ($averageMark >= 60 && $averageMark < 70):
        $studentGrade = 'Grade: A-';
        break;

      case ($averageMark >= 50 && $averageMark < 60):
        $studentGrade = 'Grade: B';
        break;

      case ($averageMark >= 40 && $averageMark < 50):
        $studentGrade = 'Grade: C';
        break;

      case ($averageMark >= 33 && $averageMark < 40):
        $studentGrade = 'Grade: D';
        break;
      case ($averageMark < 33):
        $studentGrade = 'Grade: F';
        break;
    }

    echo "Total Marks is: $totalMark" . "<br/>";
    echo "Average Marks: $averageMark" . "<br/>";
    echo "$studentGrade";
  }

}
studentMark(100, 40, 36, 33, 35)


  ?>