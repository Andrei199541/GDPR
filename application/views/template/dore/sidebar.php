<div class="sidebar">
    <div class="main-menu">
        <div class="scroll">
            <ul class="list-unstyled">
                <li class="main-menu-item" id="result">
                    <a href="<?php echo site_url("questions/getSurveyResult");?>">
                        <i class="simple-icon-layers"></i> Dashboard
                    </a>
                </li>
                <li class="main-manu-item" id="question_menu">
                    <a href="#questions">
                        <i class="iconsmind-File-Favorite"></i> Questionnaire
                    </a>
                </li>
                <li class="main-menu-item" id="management_report">
                    <a href="<?php echo site_url("document/manageReport");?>">
                        <i class="iconsmind-Box-Open"></i> Management Report
                    </a>
                </li>
                <li class="main-menu-item" id="authority_report">
                    <a href="<?php echo site_url("document/authReport");?>">
                        <i class="iconsmind-Biotech"></i> Authority Report
                    </a>
                </li>                
                <li class="main-manu-item" id="user_menu">
                    <a href="#user">
                        <i class="iconsmind-Administrator"></i>
                        <span>User</span>
                    </a>
                </li>
                <li class="main-menu-item" id="help">
                    <a href="#help_center">
                        <i class="iconsmind-Data-Search"></i> Help & Support
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
                        <i class="simple-icon-user"></i> Account
                    </a>
                </li>
                <?php if ($this->session->userdata("role") == 1) { ?>
                <li class="sub-menu-item" id="user_customer">
                    <a href="<?php echo site_url("user/customers");?>">
                        <i class="simple-icon-people"></i>Customers
                    </a>
                </li>
                <li class="sub-menu-item" id="access_management">
                    <a href="<?php echo site_url("questions/accessManage");?>">
                        <i class="iconsmind-Computer-Secure"></i> Access Management
                    </a>
                </li>
                <?php }?>
            </ul>

            <ul class="list-unstyled" data-link="questions">
                <?php if ($this->session->userdata("role") == 1) { ?>
                <li class="sub-menu-item" id="question_management">
                    <a href="<?php echo site_url("questions/management");?>">
                        <i class="simple-icon-note"></i> Questionnaire Management
                    </a>
                </li>
                <li class="sub-menu-item" id="uploads">
                    <a href="<?php echo site_url("document/uploads");?>">
                        <i class="simple-icon-cloud-upload"></i> Uploads
                    </a>
                </li>
                <?php } ?>
                <li class="sub-menu-item" id="survey">
                    <a href="<?php echo site_url("questions/survey");?>">
                        <i class="simple-icon-calculator"></i> Survey
                    </a>
                </li>
                <li class="sub-menu-item" id="todo">
                    <a href="<?php echo site_url("questions/todoList");?>">
                        <i class="simple-icon-pin"></i> Todo
                    </a>
                </li>
                <li class="sub-menu-item" id="double_check">
                    <a href="<?php echo site_url("questions/doubleCheck");?>">
                        <i class="simple-icon-wrench"></i> Double Check
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
                        <i class="iconsmind-Plasmid"></i> GDPR Compliance
                    </a>
                </li>
                <li class="sub-menu-item" id="howtouse">
                    <a href="<?php echo site_url("help/howtouse");?>">
                        <i class="simple-icon-question"></i> How To Use
                    </a>
                </li>
                <li class="sub-menu-item" id="techsupport">
                    <a href="<?php echo site_url("help/techsupport");?>">
                        <i class="simple-icon-support"></i> Tech Support
                    </a>
                </li>
                <li class="sub-menu-item" id="dpo">
                    <a href="<?php echo site_url("help/dpo");?>">
                        <i class="iconsmind-Communication-Tower2"></i> DPO Community
                    </a>
                </li>
            </ul>
        </div>
    </div>
</div>
