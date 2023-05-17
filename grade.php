<?php
$score = 0;
$total = 0;

foreach ($_POST as $question => $answer) {
    $total++;
    $score += $answer;
}

header("Location: results.php?score=$score&total=$total");
