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
            <div class="col-lg-12 col-12 text-center welcomeMessage">
                <button class="btn close" id="welcomeMessage">&times;</button>
                <p class="h5">Welcome Message</p>
                <p class="h6">Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. </p>                    
            </div>
        </div>
        <div class="row">
            <div class="col-lg-4">
                <div class="card mb-4 progress-banner">
                    <div class="card-body justify-content-between d-flex flex-row align-items-center">
                        <div>
                            <i class="simple-icon-trophy mr-2 text-white align-text-bottom d-inline-block"></i>
                            <div>
                                <p class="lead text-white">Overall Progress</p>
                                <p class="text-small text-white"></p>
                            </div>
                        </div>

                        <div>
                            <div role="progressbar" class="progress-bar-circle progress-bar-banner position-relative"
                                data-color="white" data-trail-color="rgba(255,255,255,0.2)" aria-valuenow="<?php echo $yesCount;?>" aria-valuemax="<?php echo $totalQuestion?>" data-show-percent="false">
                            </div>
                            <script>var overall="<?php echo ($yesCount && $totalQuestion) ? round($yesCount / $totalQuestion * 100, 2) : '0'; ?>"; </script>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="card mb-4 progress-banner">
                    <div class="card-body justify-content-between d-flex flex-row align-items-center">
                        <div>
                            <i class="iconsmind-Alarm mr-2 text-white align-text-bottom d-inline-block"></i>
                            <div>
                                <p class="lead text-white">GDPR Compliance</p>
                                <p class="text-small text-white">Last Updated <?php echo date("d.m.Y", strtotime($last));?></p>
                            </div>
                        </div>
                        <div>
                            <div role="progressbar" class="progress-bar-circle progress-bar-banner position-relative"
                                data-color="white" data-trail-color="rgba(255,255,255,0.2)" aria-valuenow="<?php echo $yesCount;?>" aria-valuemax="<?php echo $totalQuestion - $doNotApplyCount;?>" data-show-percent="false">
                            </div>
                            <script>var gdpr="<?php echo ($yesCount && $totalQuestion) ? round($yesCount / ($totalQuestion - $doNotApplyCount) * 100, 2) : '0'; ?>"; </script>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="card mb-4 progress-banner">
                    <a href="#" class="card-body justify-content-between d-flex flex-row align-items-center">
                        <div>
                            <i class="iconsmind-Police-Station mr-2 text-white align-text-bottom d-inline-block"></i>
                            <div>
                                <p class="lead text-white">Page Progress</p>
                                <p class="text-small text-white"></p>
                            </div>
                        </div>
                        <div>
                            <div role="progressbar" class="progress-bar-circle progress-bar-banner position-relative"
                                data-color="white" data-trail-color="rgba(255,255,255,0.2)" aria-valuenow="<?php echo $totalPage["reply"];?>" aria-valuemax="<?php echo $totalPage["count"];?>" data-show-percent="false">
                            </div>
                        </div>
                    </a>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-8-12 col-xl-6">
                <div class="icon-cards-row">
                    <div class="owl-container">
                        <div class="owl-carousel dashboard-numbers">
                            <a href="#" class="card">
                                <div class="card-body text-center">
                                    <i class="iconsmind-Alarm"></i>
                                    <p class="card-text mb-0">You do not comply on</p>
                                    <p class="lead text-center"><?php echo $doNotApplyCount;?></p>
                                    <p class="card-text mb-0">Questions</p>
                                </div>
                            </a>
                            <a href="#" class="card">
                                <div class="card-body text-center">
                                    <i class="iconsmind-Basket-Coins"></i>
                                    <p class="card-text mb-0">You do not apply on</p>
                                    <p class="lead text-center"><?php echo $noCount;?></p>
                                    <p class="card-text mb-0">Questions</p>
                                </div>
                            </a>

                            <a href="#" class="card">
                                <div class="card-body text-center">
                                    <i class="iconsmind-Arrow-Refresh"></i>
                                    <p class="card-text mb-0">You comply on</p>
                                    <p class="lead text-center"><?php echo $yesCount;?></p>
                                    <p class="card-text mb-0">Questions</p>
                                </div>
                            </a>
                        </div>
                    </div>
                    <?php
                    echo "<script> var comply = '" . $yesCount . "'; var doNotcomply = '" . $noCount . "'; var doNotApply = '" . $doNotApplyCount . "'; </script>";
                    ?>
                </div>
            </div>
            <div class="col-md-12 col-lg-6 mb-4">
                <div class="card h-100">
                    <div class="card-body">
                        <div class="dashboard-donut-chart">
                            <canvas id="complyChart"></canvas>
                        </div>
                    </div>
                </div>
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
                                    4?>
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

                                    <span class="align-middle"><?php echo $todo["title"]; ?></span>
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
        <div class="row">
            <div class="col-12">
                <div class="separator mb-3"></div>
                <div class="h5">Double Check</div>
                <?php
                if (isset($double) && count($double)) {
                    foreach ($double as $pagename => $list) {
                        foreach ($list as $item) {
                ?>
                <div class="card d-flex flex-row mb-3">
                    <div class="d-flex flex-grow-1 min-width-zero">
                        <div class="card-body align-self-center d-flex flex-column flex-md-row justify-content-between min-width-zero align-items-md-center">
                            <a class="list-item-heading mb-0 truncate w-40 w-xs-100  mb-1 mt-1">
                                <i class="simple-icon-refresh heading-icon"></i>

                                <span class="align-middle"><?php echo $item["title"]; ?></span>
                            </a>
                            <p class="mb-1 text-muted text-small w-15 w-xs-100"><?php echo $pagename; ?></p>
                            <div class="w-15 w-xs-100">
                                <a href="<?php echo site_url("questions/survey");?>"><span class="badge badge-pill badge-secondary">Check</span></a>
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
    </main>