<html>
    <head>
        <title>Authority Report</title>
    </head>
    <body>
        <table style="width: 100%; margin-top: 40px;" cellpadding="0" cellspacing="0">
        <?php
        foreach ($authoritys as $pagename => $list) {
            foreach ($list as $li) {
        ?>
        <tr>
            <td style="width: 40%;"><?php echo $li["title"]; ?></td>
            <td style="width: 15%;"><?php echo $pagename; ?></td>
            <td style="width: 44%;"><?php echo strip_tags($li["val"]);?></td>>
        </tr>
        <?php
            }
        }
        ?>
        </table>
    </body>
</html>
