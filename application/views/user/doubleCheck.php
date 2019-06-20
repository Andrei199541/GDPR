<main>
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="separator mb-3"></div>
                <div class="h5">Aspecte de re-evauat</div>
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

                                <span class="align-middle d-inline-block"><?php echo $item["title"]; ?></span>
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
    </div>
<main>