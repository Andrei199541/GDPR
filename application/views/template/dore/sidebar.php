<div class="sidebar">
    <div class="main-menu">
        <div class="scroll">
            <ul class="list-unstyled">
                <li class="main-menu-item" id="result">
                    <a href="<?php echo site_url("questions/getSurveyResult");?>">
                        <i class="simple-icon-layers"></i> Sumar
                    </a>
                </li>
                <li class="main-manu-item" id="question_menu">
                    <a href="#questions">
                        <i class="iconsmind-File-Favorite"></i> Chestionar
                    </a>
                </li>
                <li class="main-menu-item" id="management_report">
                    <a href="<?php echo site_url("document/manageReport");?>">
                        <i class="iconsmind-Box-Open"></i> Raport Management 
                    </a>
                </li>
                <li class="main-menu-item" id="authority_report">
                    <a href="<?php echo site_url("document/authReport");?>">
                        <i class="iconsmind-Biotech"></i> Raport ANSPCP
                    </a>
                </li>                
                <li class="main-manu-item" id="user_menu">
                    <a href="#user">
                        <i class="iconsmind-Administrator"></i>
                        <span>Utilizator </span>
                    </a>
                </li>
                <li class="main-menu-item" id="help">
                    <a href="#help_center">
                        <i class="iconsmind-Data-Search"></i> Suport
                    </a>
                </li>
            </ul>
        </div>
    </div>

    <div class="sub-menu">
        <div class="scroll">
            <ul class="list-unstyled" data-link="user">
                <li class="sub-menu-item" id="user_account">
                    <a href="<?php echo site_url("home");?>">
                        <i class="simple-icon-user"></i> Cont
                    </a>
                </li>
                <?php if ($this->session->userdata("role") == 1) { ?>
                <li class="sub-menu-item" id="user_customer">
                    <a href="<?php echo site_url("user/customers");?>">
                        <i class="simple-icon-people"></i>customer
                    </a>
                </li>
                <li class="sub-menu-item" id="access_management">
                    <a href="<?php echo site_url("questions/accessManage");?>">
                        <i class="iconsmind-Computer-Secure"></i> Gestiunea accesului
                    </a>
                </li>
                <?php }?>
            </ul>

            <ul class="list-unstyled" data-link="questions">
                <?php if ($this->session->userdata("role") == 1) { ?>
                <li class="sub-menu-item" id="question_management">
                    <a href="<?php echo site_url("questions/management");?>">
                        <i class="simple-icon-note"></i> Chestionar de management
                    </a>
                </li>
                <li class="sub-menu-item" id="uploads">
                    <a href="<?php echo site_url("document/uploads");?>">
                        <i class="simple-icon-cloud-upload"></i> încărcările
                    </a>
                </li>
                <?php } ?>
                <li class="sub-menu-item" id="survey">
                    <a href="<?php echo site_url("questions/survey");?>">
                        <i class="simple-icon-calculator"></i> Intrebari
                    </a>
                </li>
                <li class="sub-menu-item" id="todo">
                    <a href="<?php echo site_url("questions/todoList");?>">
                        <i class="simple-icon-pin"></i> Ce mai este de facut?
                    </a>
                </li>
                <li class="sub-menu-item" id="double_check">
                    <a href="<?php echo site_url("questions/doubleCheck");?>">
                        <i class="simple-icon-wrench"></i> Aspecte de re-evauat
                    </a>
                </li>
            </ul>
            <ul class="list-unstyled" data-link="documents">
                <?php if ($this->session->userdata("role") == 1) { ?> 
                <?php }?>
            </ul>
            <ul class="list-unstyled" data-link="help_center">
                <li class="sub-menu-item" id="gdpr">
                    <a href="<?php echo site_url("help/gdpr");?>">
                        <i class="iconsmind-Plasmid"></i> Conformare GDPR 
                    </a>
                </li>
                <li class="sub-menu-item" id="howtouse">
                    <a href="<?php echo site_url("help/howtouse");?>">
                        <i class="simple-icon-question"></i> Cum sa se foloseste produsul?
                    </a>
                </li>
                <li class="sub-menu-item" id="techsupport">
                    <a href="<?php echo site_url("help/techsupport");?>">
                        <i class="simple-icon-support"></i> Suport Tehnic 
                    </a>
                </li>
                <li class="sub-menu-item" id="dpo">
                    <a href="<?php echo site_url("help/dpo");?>">
                        <i class="iconsmind-Communication-Tower2"></i> Comunitatea DPO 
                    </a>
                </li>
            </ul>
        </div>
    </div>
</div>
