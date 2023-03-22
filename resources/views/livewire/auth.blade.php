<div class="page-content">

    <!-- Main content -->
    <div class="content-wrapper">

        <!-- Inner content -->
        <div class="content-inner">

            <!-- Content area -->
            <div class="content d-flex justify-content-center align-items-center">

                <!-- Login form -->
                <form class="login-form" wire:submit.prevent="login">
                    <div class="card mb-0">
                        <div class="card-body">
                            <div class="text-center mb-3">
                                <div class="d-inline-flex align-items-center justify-content-center mb-4 mt-2" id="noty_error">
                                    <img src="../../../assets/images/logo_icon.svg" class="h-48px" alt="">
                                </div>
                                <h5 class="mb-0">Connexion à votre Dashboard</h5>
                                <span class="d-block text-muted">Entrez vos identifiants</span>
                            </div>

                            <div class="mb-3">
                                <label class="form-label">Identifiant</label>
                                <div class="form-control-feedback form-control-feedback-start">
                                    <input type="text" wire:model="credentials.login" class="form-control" placeholder="johndoe">
                                    <div class="form-control-feedback-icon">
                                        <i class="ph-user-circle text-muted"></i>
                                    </div>
                                </div>
                            </div>

                            <div class="mb-3">
                                <label class="form-label">Mot de passe</label>
                                <div class="form-control-feedback form-control-feedback-start">
                                    <input type="password" wire:model="credentials.password" class="form-control" placeholder="•••••••••••">
                                    <div class="form-control-feedback-icon">
                                        <i class="ph-lock text-muted"></i>
                                    </div>
                                </div>
                            </div>

                            <div class="d-flex align-items-center mb-3">
                                <label class="form-check">
                                    <input type="checkbox" name="remember" class="form-check-input" checked="">
                                    <span class="form-check-label">Se souvenir de moi</span>
                                </label>

                                <a href="login_password_recover.html" class="ms-auto">Mot de passe oublié?</a>
                            </div>

                            <div class="mb-3">
                                <button type="submit" class="btn btn-primary w-100"> <span wire:loading.remove wire:target="login">Se connecter</span>  <div wire:loading wire:target="login" class="loader"></div></button>
                            </div>

                            <div class="text-center mb-3">
                                <a href="{{ route('auth.provider', ["provider" => "google"]) }}" class="btn btn-outline-danger btn-icon rounded-pill border-width-2"><i
                                        class="ph-google-logo"></i></a>
                                {{-- <a href="{{ route('auth.provider', ["provider" => "facebook"]) }}"
                                    class="btn btn-outline-primary btn-icon rounded-pill border-width-2 ms-2"><i
                                        class="ph-facebook-logo"></i></a> --}}
                                {{-- <a href="{{ route('auth.provider', ["provider" => "github"]) }}"
                                    class="btn btn-outline-secondary btn-icon rounded-pill border-width-2 ms-2"><i
                                        class="ph-github-logo"></i></a> --}}
                                {{-- <a href="{{ route('auth.provider', ["provider" => "linkedin"]) }}"
                                    class="btn btn-outline-info btn-icon rounded-pill border-width-2 ms-2"><i
                                        class="ph-linkedin-logo"></i></a> --}}
                            </div>

                            {{-- <span class="form-text text-center text-muted">
                                By continuing, you're confirming that you've
                                read our <a href="#">Terms &amp; Conditions</a> and <a href="#">Cookie Policy</a>
                            </span> --}}
                        </div>
                    </div>
                </form>
                <!-- /login form -->

            </div>
            <!-- /content area -->


            <!-- Footer -->
            <div class="navbar navbar-sm navbar-footer border-top">
                <div class="container-fluid">
                    <span>&copy; {{ Date("Y") }} {{ env("APP_NAME") }} by  <a target="_blank"
                            href="https://dmsoft.com">DM Soft App</a></span>

                    <ul class="nav">
                        <li class="nav-item ms-md-1">
                            <a href="#"
                                class="navbar-nav-link navbar-nav-link-icon text-primary bg-primary bg-opacity-10 fw-semibold rounded"
                                target="_blank">
                                <div class="d-flex align-items-center mx-md-1">
                                    <i class="ph-shopping-cart"></i>
                                    <span class="d-none d-md-inline-block ms-2">Version: {{ env("APP_VERSION") }}</span>
                                </div>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
            <!-- /footer -->

        </div>
        <!-- /inner content -->

    </div>
    <!-- /main content -->

</div>
