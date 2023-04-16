<!-- Page content -->
<div class="page-content">

    <!-- Main sidebar -->
    <div class="sidebar sidebar-dark sidebar-main sidebar-expand-lg sidebar-main-resized">

        <!-- Sidebar content -->
        <div class="sidebar-content">

            <!-- Sidebar header -->
            <div class="sidebar-section">
                <div class="sidebar-section-body d-flex justify-content-center">
                    <h5 class="sidebar-resize-hide flex-grow-1 my-auto">Navigation</h5>

                    <div>
                        <button type="button"
                            class="btn btn-flat-white btn-icon btn-sm rounded-pill border-transparent sidebar-control sidebar-main-resize d-none d-lg-inline-flex">
                            <i class="ph-arrows-left-right"></i>
                        </button>

                        <button type="button"
                            class="btn btn-flat-white btn-icon btn-sm rounded-pill border-transparent sidebar-mobile-main-toggle d-lg-none">
                            <i class="ph-x"></i>
                        </button>
                    </div>
                </div>
            </div>
            <!-- /sidebar header -->


            <!-- Main navigation -->
            <div class="sidebar-section">
                <ul class="nav nav-sidebar" data-nav-type="accordion">

                    <!-- Main -->
                    {{-- <li class="nav-item-header pt-0">
                        <div class="text-uppercase fs-sm lh-sm opacity-50 sidebar-resize-hide">Main</div>
                        <i class="ph-dots-three sidebar-resize-show"></i>
                    </li> --}}
                    <li class="nav-item">
                        <a href="{{ route('dashboard') }}" class="nav-link {{ setActiveRoute("dashboard") }}">
                            <i class="ph-house"></i>
                            <span>Dashboard</span>
                        </a>
                    </li>

                    <!-- Layout -->
                    <li class="nav-item-header">
                        <div class="text-uppercase fs-sm lh-sm opacity-50 sidebar-resize-hide">Porfolio</div>
                        <i class="ph-dots-three sidebar-resize-show"></i>
                    </li>
                    <li class="nav-item">
                        <a href="{{ route('about.index') }}" class="nav-link {{ setActiveRoute("about.index") }}">
                            <i class="ph-user-circle"></i>
                            <span>Profil</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ route('service.index') }}" class="nav-link">
                            <i class="ph-handshake"></i>
                            <span>Services</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="../full/index.html" class="nav-link">
                            <i class="ph-briefcase"></i>
                            <span>Experiences</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="../full/index.html" class="nav-link">
                            <i class="ph-student"></i>
                            <span>Formation</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="../full/index.html" class="nav-link">
                            <i class="ph-lightning"></i>
                            <span>Skills</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="../full/index.html" class="nav-link">
                            <i class="ph-projector-screen-chart"></i>
                            <span>Projets</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="../full/index.html" class="nav-link">
                            <i class="ph-messenger-logo"></i>
                            <span>Feedback</span>
                        </a>
                    </li>

                    <li class="nav-item-header">
                        <div class="text-uppercase fs-sm lh-sm opacity-50 sidebar-resize-hide">Blog</div>
                        <i class="ph-dots-three sidebar-resize-show"></i>
                    </li>
                    <li class="nav-item">
                        <a href="../full/index.html" class="nav-link">
                            <i class="ph-article"></i>
                            <span>Articles</span>
                        </a>
                    </li>

                    <li class="nav-item-header">
                        <div class="text-uppercase fs-sm lh-sm opacity-50 sidebar-resize-hide">Paramètre</div>
                        <i class="ph-dots-three sidebar-resize-show"></i>
                    </li>
                    <li class="nav-item">
                        <a href="../full/index.html" class="nav-link">
                            <i class="ph-user-gear"></i>
                            <span>Mon compte</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="../full/index.html" class="nav-link">
                            <i class="ph-chart-line-up"></i>
                            <span>Statistiques</span>
                        </a>
                    </li>
                    <!-- /layout -->

                </ul>
            </div>
            <!-- /main navigation -->

        </div>
        <!-- /sidebar content -->

    </div>
    <!-- /main sidebar -->
