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
<main>
    <div class="container-fluid">
        <div class="row">
            <div class="col-xs-12">
                <button class="btn btn-primary default float-right export">Export</button>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12 col-12 text-center welcomeMessage">
                <p class="h5">Welcome Message</p>
                <p class="h6">Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. </p>                    
            </div>
        </div>
        <div class="row mt-4">
            <div class="col-xs-4 text-center">
                <p class="h6 font-weight-bold">Overall Progress: <?php echo $yesCount . " / " . $totalQuestion;?></p>
            </div>
            <div class="col-xs-4 text-center">
                <p class="h6 font-weight-bold">GDPR Compliance: <?php echo $yesCount . " / " . ($totalQuestion - $doNotApplyCount);?></p>
            </div>
            <div class="col-xs-4 text-center">
                <p class="h6 font-weight-bold">Page Progress: <?php echo $totalPage["reply"] . " / " . $totalPage["count"]; ?></p>
            </div>
        </div>
        <div class="row">
        <div class="col-md-12 col-lg-12 col-xl-12 mb-4">
            <div class="card">
                <div class="position-absolute card-top-buttons">
                    <button class="btn btn-header-light icon-button">
                        <i class="simple-icon-refresh"></i>
                    </button>
                </div>
                <div class="card-body">
                    <h5 class="card-title">Progress By Page</h5>
                    <?php
                        if (isset($questionsByPage) && sizeof($questionsByPage)) {
                            foreach ($questionsByPage as $pageName => $questionCount) {
                                $replyCount = $yes[$pageName] ? count($yes[$pageName]) : 0;
                        ?>
                        <div class="mb-4">
                            <p class="mb-2"><?php echo $pageName; ?>
                                <span class="float-right text-muted">
                                    <?php 
                                        $progress = ($replyCount && $questionCount) ? round($replyCount * 100 / $questionCount, 2) : "0";
                                        echo $progress ;
                                    ?>
                                %</span>
                            </p>
                            <div class="progress">
                                <div class="progress-bar" role="progressbar" aria-valuenow="<?php echo $progress; ?>" aria-valuemin="0" aria-valuemax="<?php echo $questionCount; ?>"></div>
                            </div>
                        </div>
                        <?php
                            }
                        }
                        ?>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-12">
            <div class="separator mb-3"></div>
            <div class="h5">Todo List</div>
            <div class="list disable-text-selection" data-check-all="checkAll">
                <?php
                if (isset($todoList) && count($todoList)) {
                    foreach ($todoList as $pageName => $todos) {
                        foreach ($todos as $todo) {
                ?>
                <div class="card d-flex flex-row mb-3">
                    <div class="d-flex flex-grow-1 min-width-zero">
                        <div class="card-body align-self-center d-flex flex-column flex-md-row justify-content-between min-width-zero align-items-md-center">
                            <a class="list-item-heading mb-0 truncate w-40 w-xs-100  mb-1 mt-1" href="#">
                                <i class="simple-icon-refresh heading-icon"></i>

                                <span class="align-middle d-inline-block"><?php echo $todo["title"]; ?></span>
                            </a>
                            <p class="mb-1 text-muted text-small w-15 w-xs-100"><?php echo $pageName; ?></p>
                            <p class="mb-1 text-muted text-small w-15 w-xs-100"><?php echo substr(strip_tags($todo["val"]), 0, 99) ;?></p>
                            <div class="w-15 w-xs-100">
                                <a href="<?php echo site_url("questions/survey");?>"><span class="badge badge-pill badge-secondary">Solve</span></a>
                            </div>
                        </div>
                    </div>
                </div>
                <?php
                        }
                    }
                }
                ?>
            </div>
        </div>
    </div>
</main>