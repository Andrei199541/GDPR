<body class="background show-spinner">
<div class="fixed-background"></div>
<main>
    <div class="container">
        <div class="row h-100">
            <div class="col-12 col-md-10 mx-auto my-auto">
                <div class="card auth-card">
                    <div class="position-relative image-side ">

                        <p class="h2 text-center">AUDIT SI CONFORMARE GDPR</p>

                        <p class="mb-0 mt-5">
                            Utilizați-vă datele de conectare pentru a vă conecta.
                            <br/><br/>Dacă nu sunteți membru si doriti un cont, vă rugăm să folositi <a href="<?php echo base_url('register');?>">Creează cont</a>
							<br/><br/>sau sa ne contactati <a href="mailto:contact@gdprcomplet.ro">contact@gdprcomplet.ro</a>
                        </p>
                    </div>
                    <div class="form-side">
                        <a href="<?php echo site_url('main');?>">
                            <span class="logo-single"></span>
                        </a>
                        <h6 class="mb-4">Login</h6>
                        <label class="form-group has-float-label mb-4">
                            <input class="form-control" type="email" id="email" require />
                            <span>E-mail</span>
                        </label>

                        <label class="form-group has-float-label mb-4">
                            <input class="form-control" type="password" id="password" placeholder="" />
                            <span>Parola</span>
                        </label>
                        <div class="d-flex justify-content-between align-items-center">
                            <a href="<?php echo site_url('forgot');?>">Ai uitat parola, click aici?</a>
                            <a href="<?php echo site_url('register');?>">Creează cont</a>
                            <button class="btn btn-primary btn-lg btn-shadow loginBtn">Logare</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>
