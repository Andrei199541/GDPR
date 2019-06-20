<main>
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-3 col-xs-12 mb-4">
                <div class="card mb-4">
                    <div class="position-absolute card-top-buttons upload-profile-image">
                        <button class="btn btn-outline-white icon-button">
                            <i class="simple-icon-pencil"></i>
                        </button>
                        <input type="file" id="profile_image_input" hidden accept="image/*"  />
                    </div>
                    <?php
                        $photo = 'assets/img/users/' . $info->id . ".jpg";
                        if (!file_exists($photo)) {
                            $photo = 'assets/img/users/anonymous.jpg';
                        }
                    ?>
                    <img src="<?php echo base_url($photo);?>" id="profile_image" alt="Detail Picture" class="card-img-top" />

                    <div class="card-body">
                        <p class="text-muted text-small mb-2">Registration Date</p>
                        <p class="mb-3"><?php echo date("d.m.Y H:i", strtotime($info->reg_date)); ?></p>
                        <p class="text-muted text-small mb-2">Login Count</p>
                        <p class="mb-3"><?php echo $info->login_count; ?></p>
                    </div>
                </div>
            </div>
            <div class="col-lg-9 col-xs-12 mb-4">
                <div class="row mt-2">
                    <div class="col-xs-5">
                        <label for="name"><h4>Nume</h4></label>
                        <input type="text" class="form-control" name="name" id="name" placeholder="Your name" title="Enter your name." value="<?php echo $info->name;?>">
                    </div>
                    <div class="col-xs-5">
                        <label for="email"><h4>Email</h4></label>
                        <input type="email" class="form-control" name="email" id="email" disabled placeholder="you@email.com" title="Enter your email." value="<?php echo $info->email;?>">
                    </div>
                </div>
                <div class="row mt-2">
                    <div class="col-xs-5">
                        <label for="address"><h4>Nume Companie</h4></label>
                        <input type="text" class="form-control" name="company" id="company" placeholder="Enter your Company Name" title="Enter your company name" value="<?php echo $info->company;?>">
                    </div>
                </div>
                <div class="row mt-2">
                    <div class="col-xs-5">
                        <label for="password"><h4>Password</h4></label>
                        <input type="password" class="form-control" name="password" id="password" placeholder="Password" title="Enter your password.">
                    </div>
                    <div class="col-xs-5">
                        <label for="password2"><h4>Verify</h4></label>
                        <input type="password" class="form-control" name="password2" id="password2" placeholder="Confirm your password" title="Re-enter your password.">
                    </div>
                </div>
                <div class="row mt-4">
                    <div class="col-xs-12">
                        <button class="btn btn-lg default btn-success ml-2 changeInfo"><i class="simple-icon-check"></i> Save</button>
                        <!-- <button class="btn btn-lg default" type="reset"><i class="simple-icon-close"></i> Reset</button> -->
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>
