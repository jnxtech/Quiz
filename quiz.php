<?php

$quiz = [
    [
        "question" => "What is the capital of France?",
        "choices" => ["Paris", "London", "Rome"],
        "answer" => "Paris"
    ],
    [
        "question" => "What is 2+2?",
        "choices" => ["3", "4", "5"],
        "answer" => "4"
    ],
    // Add more questions as needed
];

header('Content-Type: application/json');
echo json_encode($quiz);

?>
