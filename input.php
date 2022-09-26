<?php

    $question = trim($_POST['question']);
    $answer = $_POST['answ'];
    $answer_1 = trim($_POST['answer_1']);
    $answer_2 = trim($_POST['answer_2']);
    $answer_3 = trim($_POST['answer_3']);

    $query = 'INSERT INTO tests(questions, answer_1,answer_2,answer_3, answer) VALUES(:question, :answer_1, :answer_2, :answer_3, :answer)';
    $stmt = $db->prepare($query);
    $stmt->bindValue(':question', $question, PDO::PARAM_STR);
    $stmt->bindValue(':answer_1', $answer_1, PDO::PARAM_STR);
    $stmt->bindValue(':answer_2', $answer_2, PDO::PARAM_STR);
    $stmt->bindValue(':answer_3', $answer_3, PDO::PARAM_STR);
    $stmt->bindValue(':answer', $answer, PDO::PARAM_STR);
    $stmt->execute();

