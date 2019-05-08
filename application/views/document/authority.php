<html>
    <head>
        <title>Authority Report</title>
        <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
        <meta charset="utf-8">
        <style>
        label {
            font-weight: bold;
            color: rgb(109, 112, 114);
        }
        span {
            color: rgb(109, 112, 114);
        }
        </style>
    </head>
    <body>
        <?php
        header('Content-Type: text/html; charset=utf-8');
        $text = '';
        if ($authoritys && count($authoritys)) {
            foreach ($authoritys as $pagename => $list) {
                if (count($list)) {
                    $text .= '<h4>' . $pagename . '</h4>';
                }
                foreach ($list as $li) {
                    $val = str_replace("\u0103", "ă", $li["val"]);
                    $text .= '<div>';
                    $text .= '<label>' . $li["title"] . '</label><br>';
                    $text .= '<span>' . $val . '</span>';
                    $text .= '</div><br>';
                }
            }
            echo $text;
        }
        ?>
        
    </body>
</html>
