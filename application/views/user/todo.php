<main>
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
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
    </div>
<main>