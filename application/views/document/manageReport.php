<?php
$totalQuestion = 0;
if (isset($questionsByPage) && count($questionsByPage)) {
    foreach ($questionsByPage as $pageName => $questionCount) {
        $totalQuestion += $questionCount;
    }
}
$yesCount = 0;
if (isset($yes) && count($yes)) {
    foreach ($yes as $pageName => $questions) {
        $yesCount += count($questions);
    }
}
$noCount = 0;
if (isset($no) && count($no)) {
    foreach ($no as $pageName => $questions) {
        $noCount += count($questions);
    }
}
$doNotApplyCount = 0;
if (isset($apply) && count($apply)) {
    foreach ($apply as $pageName => $questions) {
        $doNotApplyCount += count($questions);
    }
}
?>
<html>
    <head>
        <title>Management Report<title>
    </head>
    <body>
        <p style="text-align: center;">Welcome Message</p>
        <table style="width: 100%" cellpadding="0" cellspacing="0">
            <tr>
                <td style="width: 33.332%; text-align: center;">Overall Progress: <?php echo $yesCount . " / " . $totalQuestion;?></td>
                <td style="width: 33.332%; text-align: center;">GDPR Compliance: <?php echo $yesCount . " / " . ($totalQuestion - $doNotApplyCount);?></td>
                <td style="width: 33.332%; text-align: center;">Page Progress: <?php echo $totalPage["reply"] . " / " . $totalPage["count"]; ?></td>
            </tr>
            <tr>
                <td><h5>Progress By Page</h5></td>
            </tr>
        </table>
        <table style="width: 100%" cellpadding="0" cellspacing="0">    
            <?php
            if (isset($questionsByPage) && sizeof($questionsByPage)) {
                foreach ($questionsByPage as $pageName => $questionCount) {
                    $replyCount = $yes[$pageName] ? count($yes[$pageName]) : 0;
                    $progress = ($replyCount && $questionCount) ? round($replyCount * 100 / $questionCount, 2) : "0";
            ?>
            <tr>
                <td style="width: 70%; text-align: left;  "><?php echo $pageName; ?></td>
                <td style="width: 29%; text-align: right; "><?php echo $progress; ?>%</td>
            </tr>
            <?php
                }
            }
            ?>
        </table>
            <?php
            $text = '';
            if (isset($todoList) && count($todoList)) {
                foreach ($todoList as $pageName => $todos) {
                    if (count($todos)) {
                        $text .= '<h4>' . $pageName . '</h4>';
                    }
                    foreach ($todos as $todo) {
                        $text .= '<div>';
                        $text .= '<label>' . $todo["title"] . '</label><br>';
                        $text .= '<span>' . $todo["val"] . '</span>';
                        $text .= '</div><br>';
                    }
                }
            }
            echo $text;
            ?>
    </body>
</html>