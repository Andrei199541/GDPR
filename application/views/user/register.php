<body class="background show-spinner">
    <div class="fixed-background"></div>
    <main>
        <div class="container">
            <div class="row h-100">
                <div class="col-12 col-md-10 mx-auto my-auto">
                    <div class="card auth-card">
                        <div class="position-relative image-side ">
                            <p class="h2">AUDIT SI CONFORMARE GDPR</p>
                            <p class="mb-0 mt-5">
                                Folosiți formularul alăturat pentru înregistrare. 
                                <br/><br/>Daca aveți deja cont va rugam sa va <a href="<?php echo site_url('login');?>">conectați</a>. 
                            </p>
                        </div>
                        <div class="form-side">
                            <a href="<?php echo site_url('main');?>">
                                <span class="logo-single"></span>
                            </a>
                            <h6 class="mb-4">Inregistrare</h6>

                            <label class="form-group has-float-label mb-4">
                                <input class="form-control" type="text" id="name"/>
                                <span>Nume</span>
                            </label>
                            <label class="form-group has-float-label mb-4">
                                <input class="form-control" type="email" id="email" />
                                <span>E-mail</span>
                            </label>
                            <label class="form-group has-float-label mb-4">
                                <input class="form-control" type="text" id="company_name"/>
                                <span>Nume Companie</span>
                            </label>
                            <label class="form-group has-float-label mb-4">
                                <input class="form-control" type="password" id="password" placeholder="" />
                                <span>Parolă </span>
                            </label>
                            <div class="d-flex justify-content-end align-items-center">
                                <button class="btn btn-primary btn-lg btn-shadow registerBtn">REGISTER</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
