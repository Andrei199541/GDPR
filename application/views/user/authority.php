<main>
    <div class="container-fluid">
        <div class="row">
        <div class="col-xl-12 col-lg-12 mb-2">
            <button class="btn btn-info default float-right exportAuthority">Printeaza sau Exporta in PDF</button>
        </div>
        </div>
        <div class="row">
            <div class="col-12 mb-4">
                <div class="h5 text-center">Raport ANSPCP </div>
                <p class="text-center">Acest raport arata progresul conformarii GDPR pe fiecare capitol in parte si poate fi prezentat autoritatii in cazul in care aveti un control sau va sunt solicitate informatii cu privire la actiuniile si eforturiile intreprinse in vederea conformarii. </p>
                <div class="list disable-text-selection" data-check-all="checkAll">
                    <?php
                    foreach ($authoritys as $pagename => $list) {
                        foreach ($list as $li) {
                    ?>
                    <div class="card d-flex flex-row mb-3">
                        <div class="d-flex flex-grow-1 min-width-zero">
                            <div class="card-body align-self-center d-flex flex-column flex-md-row justify-content-between min-width-zero align-items-md-center">
                                <a class="list-item-heading mb-0 truncate w-40 w-xs-100  mb-1 mt-1" href="#">
                                    <i class="simple-icon-refresh heading-icon"></i>

                                    <span class="align-middle d-inline-block"><?php echo $li["title"]; ?></span>
                                </a>
                                <p class="mb-1 text-muted text-small w-15 w-xs-100"><?php echo $pagename; ?></p>
                                <p class="mb-1 text-muted text-small w-15 w-xs-100"><?php echo strip_tags($li["val"]);?></p>
                            </div>
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
</main>