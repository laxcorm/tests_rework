<?php
if ($_GET['id'] ?? false) {
    $step = ($_GET['id'] > 0) ? 1 : -1;
    $id = abs($_GET['id']);

    if (!isset($_SESSION['questions'][$id]) && !isset($_GET['answ']) && $step != -1) {
        $step = 0;
        $noanswer = true;
    }
    $_SESSION['questions'][$id] = $_GET['answ'];

    if (isset($_SESSION['questions'][$id + $step])) {
        ${$_SESSION['questions'][$id + $step]} = 'checked';
    }
}
$id = ($id ??  1);
